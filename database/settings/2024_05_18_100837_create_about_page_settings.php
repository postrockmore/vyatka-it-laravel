<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('AboutSettings.title', 'О студии');
        $this->migrator->add('AboutSettings.description', '');
        $this->migrator->add('AboutSettings.tags', []);
        $this->migrator->add('AboutSettings.bulits', []);
    }
};
