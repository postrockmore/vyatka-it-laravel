<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class VK
{
    public function get($limit = 12): array
    {
        $reviews_raw = Storage::json('vk_reviews.json');

        // Главный пользователь
        $user[ '34687056' ][ 'name' ] = 'Вятка-IT';
        $user[ '34687056' ][ 'photo' ] = $this->getImage('https://sun9-80.userapi.com/impg/c0kL1KwUOTGkKeTOiMaolyC1R9BYAVwxy-UQ0A/83KOO542RNo.jpg?size=500x500&quality=95&sign=79ab8dade1ea79691d3de35b7f9a9b74&type=album');

        // Пользователи
        foreach ( $reviews_raw['response']['profiles'] as $item ) {
            $user[ $item['id'] ][ 'name' ] = $item['first_name'] . ' ' . $item['last_name'];
            $user[ $item['id'] ][ 'photo' ] = $this->getImage($item['photo_100']);
        }

        // Отзывы
        foreach ( $reviews_raw['response']['items'] as $key => $item ) {
            if ( $limit > 0 && $key > $limit ) {
                break;
            }

            if ( isset( $user[ abs( $item['from_id'] ) ] ) ) {
                $date = date('d.m.Y', $item['date']);
                $images = [];

                # Изображения
                if ( isset( $item['attachments'] ) ) {
                    foreach ( $item['attachments'] as $attachment ) {
                        $image_sizes = [];

                        if ( $attachment['type'] == 'photo' ) {
                            $image_sizes = $attachment['photo']['sizes'];
                        }

                        if ( $attachment['type'] == 'doc' ) {
                            if ( $attachment['doc']['ext'] != 'jpg' && $attachment['doc']['ext'] != 'png' ) {
                                continue;
                            }

                            $image_sizes = $attachment['doc']['preview']['photo']['sizes'];
                        }

                        $thumb = null;
                        $large = null;
                        $sizes = null;

                        foreach ( $image_sizes as $size ) {
                            $url = $size['url'] ?? $size['src'];

                            if ( $size['type'] == 's' ) {
                                $thumb = $url;

                                $sizes = [
                                    'w' => $size['width'],
                                    'h' => $size['height']
                                ];
                            }

                            if ( $size['type'] == 'x' ) {
                                $large = $url;
                            }

                            if ( $size['type'] == 'w' ) {
                                $large = $url;
                            }
                        }

                        $images[] = [
                            'thumb' => $thumb,
                            'large' => $large,
                            'sizes' => $sizes
                        ];
                    }
                }
            } else {
                $images = null;
            }

            $reviews[] = [
                'id'         => $item['from_id'],
                'comment_id' => $item['id'],
                'name'       => $user[ abs( $item['from_id'] ) ][ 'name' ],
                'avatar'      => $user[ abs( $item['from_id'] ) ][ 'photo' ],
                'date'       => $date,
                'text'       => htmlentities( $item['text'] ),
                'link'       => 'https://vk.com/topic-34687056_31455682?post=' . $item['id'],
                'images'     => $images
            ];
        }

        return $reviews;
    }

    public function getImage($url): string
    {
        $name = strstr(substr($url, strrpos($url, '/') + 1), '?', true);
        $image_path = 'vk_photos/' . $name;

        if (! Storage::exists($image_path)) {
            $contents = file_get_contents($url);
            Storage::put($image_path, $contents);
        }

        return Storage::url($image_path);
    }
}
