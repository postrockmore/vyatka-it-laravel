<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('app.behance', '');
    }

    public function down() {
        $this->migrator->remove('app.behance');
    }
};
