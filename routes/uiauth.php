<?php

use App\Livewire\Uilogin\Login;
use App\Livewire\Uilogin\Register;
use Illuminate\Support\Facades\Route;
use App\Livewire\Uilogin\ForgetPassword;
use App\Livewire\TechnicalSupport\TechSupportCreate;
 
 
Route::middleware(['web'])->group(function () {

    Route::get('login', Login::class)->name('uilogin.login');
       
    Route::get('register', Register::class)->name('uilogin.register');

  
    Route::get('forget-password', ForgetPassword::class)->name('uilogin.forgetpassword');
});
 
       


Route::prefix('support/')->middleware(['web'])->name('support.')->group(function() {
    Route::get('create',TechSupportCreate::Class)->name('create');
});

