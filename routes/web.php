<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DineController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DeskripsiMainController;
use App\Http\Controllers\DeskripsiDineController;
use App\Http\Controllers\DeskripsiSupportController;

use Illuminate\Routing\Router;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cart', function () {
    return view('Cart');
});

Route::get('/faqs', function () {
    return view('Faqs');
});


Route::get('equipments-main', [MainController::class, 'mainEquipment']);

Route::get('equipments-dine', [DineController::class, 'dineEquipment']);

Route::get('equipments-support', [SupportController::class, 'supportEquipment']);

Route::get('deskripsi/{id}', [DeskripsiMainController::class, 'deskripsiBarang']);

Route::get('deskripsi2/{id}', [DeskripsiDineController::class, 'deskripsiBarang']);

Route::get('deskripsi3/{id}', [DeskripsiSupportController::class, 'deskripsiBarang']);

Route::get('posts/{slug}', [PostController::class, 'show']);
