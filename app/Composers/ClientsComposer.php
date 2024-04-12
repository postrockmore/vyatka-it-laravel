<?php

namespace App\Composers;

use App\Models\Client;
use App\Services\VK;
use App\Settings\HeaderMenuSettings;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class ClientsComposer
{
    public function compose(View $view): void
    {
        $clients = cache()->rememberForever('clients', function () {
            return Client::query()->get();
        });

        $view
            ->with('clients', $clients);
    }
}