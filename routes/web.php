<?php

use App\Http\Controllers\IndexController;
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

// halaman awalatau landing page
Route::get('/', [IndexController::class, 'indexPage']);
Route::get('/company', [IndexController::class, 'companyPage']);
Route::group(['prefix' => 'product'], function () {
    Route::get('/', [IndexController::class, 'productPage']);
    Route::get('/overallfactory', [IndexController::class, 'overfactoryPage']);
    Route::get('/partsbusiness', [IndexController::class, 'partsPage']);
    Route::get('/diesbusiness', [IndexController::class, 'diesPage']);
    Route::get('/castingbusiness', [IndexController::class, 'castingPage']);
});

Route::get('/sustainbility', [IndexController::class, 'sustainbilityPage']);
Route::get('/contact', [IndexController::class, 'contactPage']);
Route::get('/gallery', [IndexController::class, 'galleryPage']);


Auth::routes();
// halaman admin dan lainnya
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/users', function () {
        return view('admin.users');
    });

    Route::get('/settings', function () {
        return view('admin.settings');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
