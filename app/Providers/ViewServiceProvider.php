<?php

namespace App\Providers;

use App\Composers\ClientsComposer;
use App\Composers\HeaderComposer;
use App\Composers\ReviewsComposer;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(
            ['sections.reviews'],
            ReviewsComposer::class
        );

        View::composer(
            ['blocks.header', 'blocks.footer'],
            HeaderComposer::class
        );

        View::composer(
            ['sections.clients'],
            ClientsComposer::class
        );

        Vite::macro('image', fn($asset) =>
            $this->asset("resources/images/$asset")
        );
    }
}
