<?php


use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return view('logout');
});



Route::get('/',	[HomeController::class, 'getHome'])->name('home');
Route::get('catalog',	[CatalogController::class, 'getIndex'])->name('index');
Route::get('catalog/show/{id}',	[CatalogController::class, 'getShow'])->name('show');
Route::get('catalog/create',	[CatalogController::class, 'getCreate'])->name('create');
Route::get('catalog/edit/{id}',	[CatalogController::class, 'getEdit'])->name('edit');





