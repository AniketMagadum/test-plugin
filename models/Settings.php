<?php

namespace October\Test\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'october_test_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attachOne=[
        'sample_image'=>"System\Models\File"
    ];
}
