<?php

namespace App\Composers;

use App\Services\VK;
use App\Settings\HeaderMenuSettings;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HeaderComposer
{
    protected HeaderMenuSettings $header_menu_settings;

    public function __construct(HeaderMenuSettings $header_menu_settings)
    {
        $this->header_menu_settings = $header_menu_settings;
    }

    public function compose(View $view): void
    {
        $contacts = cache('contacts');

        $menu = cache('menu');
        $header_links = $menu['header_links'];

        $view
            ->with('links', $header_links)
            ->with('contacts', $contacts);
    }
}