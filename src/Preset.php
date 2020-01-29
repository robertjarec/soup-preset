<?php

namespace Soup\SoupPreset;

use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class Preset extends LaravelPreset
{
    public static function install()
    {
        static::cleanSassDirectory();
        static::updatePackages();
        static::updateMix();
    }

    public static function cleanSassDirectory()
    {
        File::cleanDirectory(resource_path('sass'));
    }

    public static function updatePackageArray($packages)
    {
        return Arr::except($packages, [
            'axios',
        ]);
    }

    public static function updateMix()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }
}
