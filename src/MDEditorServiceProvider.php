<?php
/**
 * Created by PhpStorm.
 * User: Axhello
 * Date: 4/1/16
 * Time: 12:59
 */
namespace Axhello\Editor;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class MDEditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/config/views', 'editor');

        $this->publishes([
            __DIR__.'/config/views' => base_path('resources/views/vendor/editor'),
        ]);
        $this->publishes([
            __DIR__.'/config/editor' => base_path('public/plugin/editor'),
        ]);
        $this->publishes([
            __DIR__.'/config/editor.php' => config_path('editor.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('MDEditor', function ($app) {
            return new  \Axhello\Editor\MDEditor;
        });
    }
}
