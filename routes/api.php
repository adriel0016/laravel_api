<?php

use App\Business\Controllers\Api\v1\Auth\AuthenticateController;
use App\Business\Controllers\PostsController;
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

Route::middleware('Auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'  =>  'cors'], function () {
    Route::post('login', 'v1\Auth\AuthenticateController@authenticate');
    Route::resource('posts', PostsController::class);

    Route::group(['middleware' => 'jwt.Auth'], function () {

    });
});
