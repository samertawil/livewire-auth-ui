<?php

namespace uilogin\pkg;

use Illuminate\Support\ServiceProvider;

class UiloginServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
         
		
        $this->publishes(
            [__DIR__ . '/../database/' => database_path(''),],
            'database'
        );

		 

        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views'),],
            'views'
        );


        $this->publishes( [__DIR__ . '/../lang' => lang_path(''),],
           
            'lang'
        );


        $this->publishes([
            __DIR__.'/Http/Livewire' => app_path('Livewire'),
        ]);

        $this->publishes([
            __DIR__.'/Http/Middleware' => app_path('/Http/Middleware'),
        ]);


        $this->publishes([
            __DIR__.'/Http/Models' => app_path('Models'),
        ]);
    
    
   
        $this->publishes([
            __DIR__.'/../routes/uiauth.php' => base_path('routes/uiauth.php'),
        ]);


        $this->publishes([
            __DIR__.'/../routes/support.php' => base_path('routes/support.php'),
        ]);

        
        $this->publishes(
            [__DIR__ . '/../config/techsupport_en.php' => config_path('techsupport_en.php'),],
            'config'
        );

        $this->publishes(
            [__DIR__ . '/../config/techsupport_ar.php' => config_path('techsupport_ar.php'),],
            'config'
        );

        $this->publishes(
            [__DIR__ . '/../config/captcha.php' => config_path('captcha.php'),],
            'config'
        );


        $this->publishes([
            __DIR__.'/../uilogin-assets' => public_path('uilogin-assets'),
        ]);
    
    }
}
