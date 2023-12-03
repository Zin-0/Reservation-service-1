<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BookmarkController;

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

Route::get('/thanks', [ShopController::class, 'thanks']);
Route::get('/shop_all', [ShopController::class, 'shop_all']);
Route::get('/detail/{store}', [ShopController::class, 'detail']);
Route::get('/back', [ShopController::class, 'back']);
Route::post('/done', [ShopController::class, 'done']);
Route::get('/my_page', [ShopController::class, 'my_page']);
// お気に入り
Route::get('/nice/{store_id}', [BookmarkController::class, 'nice'])->name('nice');
Route::get('/unnice/{store_id}', [BookmarkController::class, 'unnice'])->name('unnice');
