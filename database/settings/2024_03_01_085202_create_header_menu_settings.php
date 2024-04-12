<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.header_links', []);
    }

    public function down(): void
    {
        $this->migrator->remove('app.header_links');
    }
};
