<?php

namespace Tests\Feature;

use App\Models\Setting;
use Tests\TestCase;

class SettingTest extends TestCase
{

    public function test_setting_model_exists(): void
    {
        $setting = Setting::factory()->create();

        $this->assertModelExists($setting);
    }

    public function test_database_has_mailer_api_key_setting(): void
    {
        $this->assertDatabaseHas('setting', [
            'variable' => 'mailerlite_api_key',
        ]);
    }
}