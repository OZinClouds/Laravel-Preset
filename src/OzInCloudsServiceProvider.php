<?php

namespace OzInClouds\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use OzInClouds\LaravelPreset\Preset;

class OzInCloudsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('ozinclouds', function($command){
            Preset::install();
            $command->info('Preset applied: OzInClouds.');
        });
    }
}
