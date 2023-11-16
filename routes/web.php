<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;

Route::get('storage-link', function(){
    $t = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $l = $_SERVER['DOCUMENT_ROOT'].'/public/storage';
    symlink($t,$l);
});



Route::get('', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/indivisual/{id}', [HomeController::class, 'ind_product'])->name('ind_product');



Route::get('dashboard', [DeveloperController::class,'CMSDashboard'])->middleware('ChecktheDeveloper')->name('developer.dashboard');
Route::get('login', [DeveloperController::class,'CmsLogin'])->middleware('ChecktheDeveloperDashboard')->name('developer.login');
Route::post('loginCheck', [DeveloperController::class,'CmsLoginCheck'])->name('developer.loginCheck');
Route::get('signout', [DeveloperController::class,'CmsSignOut'])->name('developer.signout');


Route::post('/category/store', [BranchController::class, 'store'])->name('category.store');
Route::delete('/category/delete/{id}', [BranchController::class, 'destroy'])->name('category.destroy');
Route::post('/category/edit/{id}', [BranchController::class, 'edit'])->name('category.edit');
Route::post('/furniture/store', [ProductController::class, 'store'])->name('furniture.store');
Route::delete('/furniture/delete/{id}', [ProductController::class, 'destroy'])->name('furniture.destroy');
Route::post('/furniture/edit/{id}', [ProductController::class, 'edit'])->name('furniture.edit');
Route::post('/furniture/sale/{id}', [ProductController::class, 'sale'])->name('furniture.changesale');

Route::post('/basic/edit', [ProductController::class, 'basicedit'])->name('basic.edit');

