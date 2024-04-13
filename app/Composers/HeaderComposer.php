<?php

namespace App\Composers;

use App\Services\VK;
use App\Settings\ContactsSettings;
use App\Settings\HeaderMenuSettings;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HeaderComposer
{
    protected HeaderMenuSettings $header_menu_settings;
    protected ContactsSettings $contacts_settings;

    public function __construct(HeaderMenuSettings $header_menu_settings, ContactsSettings $contacts_settings)
    {
        $this->header_menu_settings = $header_menu_settings;
        $this->contacts_settings = $contacts_settings;
    }

    public function compose(View $view): void
    {
        $contacts = cache()->remember('contacts', 3600, function () {
            return $this->contacts_settings;
        });

        $menu = cache()->remember('menu', 3600, function () {
            return $this->header_menu_settings;
        });

        $header_links = $menu->header_links;

        $view
            ->with('links', $header_links)
            ->with('contacts', $contacts);
    }
}
