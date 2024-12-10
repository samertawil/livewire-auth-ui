
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

<pre><span>livewire/auth-ui</span></pre>

 
Register package by add provider services in bootstrap folder 
<pre><span> uilogin\pkg\UiloginServiceProvider::class, </span></pre>

<pre><span>
 
return [
    ...
    uilogin\pkg\UiloginServiceProvider::class,
];
</span></pre>

publish :

<pre><span>php artisan vendor:publish --provider="uilogin\pkg\UiloginServiceProvider" </span></pre>

After publishing the migration you can create the  tables by running the migrations:

<pre><span>php artisan migrate</span></pre>


Seed db to insert questions to recovery_questions table

<pre><span>php artisan db:seed RecoveryQuestionsSeeder</span></pre>


Including uiauth route file to web.php

<pre><span>include __DIR__.'/uiauth.php';</span></pre>

Register middleware to localize the browser language

 <pre><span>->withMiddleware(function (Middleware $middleware) {
        $middleware->append(UiloginBrowserLocale::class);
   }) </span></pre>


   ## License
   This package is distributed under the MIT License. Please see the LICENSE file for more information.