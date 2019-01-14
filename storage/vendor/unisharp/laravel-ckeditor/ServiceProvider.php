<?php

namespace Unisharp\Ckeditor;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/ckeditor.js' => storage_path('vendor/unisharp/laravel-ckeditor/ckeditor.js'),
                __DIR__ . '/config.js' => storage_path('vendor/unisharp/laravel-ckeditor/config.js'),
                __DIR__ . '/styles.js' => storage_path('vendor/unisharp/laravel-ckeditor/styles.js'),
                __DIR__ . '/contents.css' => storage_path('vendor/unisharp/laravel-ckeditor/contents.css'),
                __DIR__ . '/adapters' => storage_path('vendor/unisharp/laravel-ckeditor/adapters'),
                __DIR__ . '/lang' => storage_path('vendor/unisharp/laravel-ckeditor/lang'),
                __DIR__ . '/skins' => storage_path('vendor/unisharp/laravel-ckeditor/skins'),
                __DIR__ . '/plugins' => storage_path('vendor/unisharp/laravel-ckeditor/plugins'),
            ],
            'ckeditor'
        ); 
    }

    public function register()
    {

    }
}
