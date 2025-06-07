<?php

use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\PortfoliosController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\admin\SkillsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\LoginRegisterController;
use App\Http\Controllers\admin\DashboardController;
use UniSharp\LaravelFilemanager\Lfm;


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

Route::get('/', [HomeController::class, 'index'])->name('homePage');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('login', [LoginRegisterController::class, 'signIn'])->name('signIn');

    Route::get('register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('register', [LoginRegisterController::class, 'signUp'])->name('signUp');
});

// Route::middleware(['auth', 'web'])->group(function () {
    Route::get('logout', [LoginRegisterController::class, 'logOut'])->name('logout');
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::resource('post', PostsController::class);
        Route::resource('category', CategoriesController::class);
        Route::resource('page', PagesController::class);
        Route::resource('portfolio', PortfoliosController::class);
        Route::resource('skill', SkillsController::class);

        Route::get('/fileManager', [DashboardController::class, 'gallery'])->name('admin.gallery');
    });
// });

//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    Lfm::routes();
//});