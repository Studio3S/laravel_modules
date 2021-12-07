<?php

namespace Studio3S\Modules;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use Studio3S\Modules\Models\Modules;

class AppModuleServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__ . '/Configs/modules.php', 'studio3s.modules');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/Configs/modules.php' => config_path('studio3s/modules.php'),
            ], 'config');

            if (!class_exists('CreateModulesTable')) {
                $this->publishes([
                    __DIR__ . '/Database/Migrations/2021_12_07_145301_create_modules_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_modules_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }

        $this->app->bind('studio3s_modules', function($app) {
            return new Modules();
        });
    }
}
