<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Create Shop
Route::post('/admin/creatingshop', [ShopController::class, 'createShop']);

// Fetch Shop
Route::get('/admin/fetchingshop', [ShopController::class, 'fetchShop']);
Route::get('/admin/fetchingshopname', [ShopController::class, 'fetchShopName']);

//Create Group
Route::get('/admin/createGroup', [GroupController::class, 'createGroup']);
