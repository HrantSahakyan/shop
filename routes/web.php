<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/store', function () {
    return view('store');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeComponent::class]);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/terms', [\App\Http\Controllers\PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [\App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');
Route::get('/return-policy', [\App\Http\Controllers\PageController::class, 'return_policy'])->name('return-policy');


//Company
Route::middleware(['authcompany'])->group(function (){
    Route::get('/profile', [\App\Http\Controllers\CompanyController::class, 'index'])->name('profile');
    Route::get('/dashboard', [\App\Http\Controllers\CompanyController::class, 'dashboard'])->name('dashboard');
});
//Customer
Route::middleware(['auth'])->group(function (){
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
});
