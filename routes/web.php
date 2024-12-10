<?php

use Illuminate\Support\Facades\Route;

 

Route::get('/test',function() {
    return view('cust::test');
});


  include __DIR__.'/uiauth.php' ;
 

