<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.phone', '');
        $this->migrator->add('app.email', '');
        $this->migrator->add('app.messengers', '');
        $this->migrator->add('app.vk', '');
        $this->migrator->add('app.telegram', '');
        $this->migrator->add('app.work_time', '');
        $this->migrator->add('app.address', '');
        $this->migrator->add('app.geo', '');
    }

    public function down() {
        $this->migrator->remove('app.phone');
        $this->migrator->remove('app.email');
        $this->migrator->remove('app.messengers');
        $this->migrator->remove('app.vk');
        $this->migrator->remove('app.telegram');
        $this->migrator->remove('app.work_time');
        $this->migrator->remove('app.address');
        $this->migrator->remove('app.geo');
    }
};
