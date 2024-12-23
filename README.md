
## About  library

laravel-livewire/auth-ui library base on PHP Laravel framework, contains Auth presets (Login, Register, Forget passwork, Ask for help)
development by "samer tawil"  eng.samertawil@gmail.com 


 
## Installation
You can install the package via composer:

<pre><span>composer require laravel-livewire/auth-ui</span></pre>

 
Register package by add provider services in bootstrap folder 
<pre><span> uilogin\pkg\UiloginServiceProvider::class, </span></pre>


 <pre><span> return [
    ...
    uilogin\pkg\UiloginServiceProvider::class,
];
</span></pre>

publish :

<pre><span>php artisan vendor:publish --provider="uilogin\pkg\UiloginServiceProvider" </span></pre>

<h5 style="color:red !important;">Attention, overwrite User model if you not customize it  </h5>
<pre><span>php artisan vendor:publish --provider="uilogin\pkg\UiloginServiceProvider"  --force  --tag=userModel</span></pre>

or add these lines

 <pre><span> return [
    ...
       protected $fillable = 
    [ 'name', 'email', 'password', 'user_name', 'mobile', 'user_type', 'user_activation', 'status_id', 'need_to_change',];

       public static function user($user_name) {
       return  $user = User::where('user_name', $user_name)->first();
    }
];
</span></pre>

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



- add your custome page name to redirect when logout  in [config/uilogin.php - 'redirectRoute' key]

* Url to start: 

 </span></pre> http://***servername***/login </span></pre>



   ## License
   This package is distributed under the MIT License. Please see the LICENSE file for more information.