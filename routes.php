<?php
use October\Test\Models\Settings;

Route::get('manifest.json', function () {
    $settings= Settings::instance();
    return $settings->sample_image;
});
?>