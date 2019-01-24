<?php

namespace OzInClouds\LaravelPreset;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Console\Presets\Preset as ThePreset;


class Preset extends ThePreset
{
    public static function install()
    {
        static::cleanAndReshapeSASSDirectory();
        static::reshapeJSDirectory();
        static::reshapeMix();
        static::updatePackages();
        static::preparePhpUnitXML();

    }

    public static function cleanAndReshapeSASSDirectory()
    {
        File::cleanDirectory(resource_path('sass/'));
        copy(__DIR__ . '/stubs/app.scss', resource_path('sass/app.scss'));
        copy(__DIR__ . '/stubs/_variables.scss', resource_path('sass/_variables.scss'));

    }

    public static function reshapeJSDirectory()
    {
        copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));

    }

    public static function reshapeMix()
    {
        copy(__DIR__ . '/stubs/webpack.mix.js', base_path('webpack.mix.js'));
    }

    public static function preparePhpUnitXML()
    {
        copy(__DIR__ . '/stubs/phpunit.xml', base_path('phpunit.xml'));
    }

    public static function updatePackageArray($packages)
    {
        return
            [
                "laravel-mix" => "^4.0.7",
                "font-awesome" => "^4.7.0",
                "bootstrap" => "^4.0.0",
                "jquery" => "^3.2",
                "popper.js" => "^1.12",
                "lodash" => "^4.17.5",
                "browser-sync" => "^2.26.3",
                "browser-sync-webpack-plugin" => "2.0.1",
                "resolve-url-loader" => "^2.3.1",
                "axios" => "^0.18",
                "vue" => "^2.5.17",
                "vue-template-compiler" => "^2.5.21",
                "cross-env" => "^5.1",
                "clean-webpack-plugin" => "^1.0.0",
                "sass" => "^1.15.2",
                "sass-loader" => "^7.1.0",
                "node-sass" => "^4.11.0",
                "node-sass-glob-importer" => "^5.2.0"

            ];

    }


}
