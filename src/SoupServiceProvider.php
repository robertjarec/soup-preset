<?php

namespace Soup\SoupPreset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;
use Soup\Preset;

class SoupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('soup', function ($command) {
            Preset::install();
        });
    }
}
