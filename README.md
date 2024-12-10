
## About  liberary



2- add provider name to bootstrap -> provider file : uilogin\pkg\UiloginServiceProvider::class,
3- php artisan vendor:publish --provider="uilogin\pkg\UiloginServiceProvider" 
4- php artisan migrate 
"5- add data to question table 
php artisan db:seed RecoveryQuestionsSeeder"
6- include __DIR__.'/uiauth.php';
"7- add this code  in bootstrap app.php file to load middleware 
  ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(UiloginBrowserLocale::class);
   }) "


 
## Installation
You can install the package via composer:

<pre><span>composer require ui_wired_login/pkg </span></pre>

## Usage
add providerservices to providers class in bootstrap folder
<pre><span> uilogin\pkg\UiloginServiceProvider::class, </span></pre>

<pre><span>
<?php

return [
    App\Providers\AppServiceProvider::class,
    uilogin\pkg\UiloginServiceProvider::class,
];
</span></pre>
