<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;


Route::get('', [ProductController::class, 'home'])->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');



    Route::get('dashboard', [DeveloperController::class,'CMSDashboard'])->middleware('ChecktheDeveloper')->name('developer.dashboard');
    Route::get('login', [DeveloperController::class,'CmsLogin'])->middleware('ChecktheDeveloperDashboard')->name('developer.login');
    Route::post('loginCheck', [DeveloperController::class,'CmsLoginCheck'])->name('developer.loginCheck');
Route::get('signout', [DeveloperController::class,'CmsSignOut'])->name('developer.signout');
