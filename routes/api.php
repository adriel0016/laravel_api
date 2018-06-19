<?php

use App\Business\Controllers\PostsController;
use Illuminate\Http\Request;

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

Route::group(['middleware'  =>  'cors'], function () {
    Route::post('login', 'AuthenticateController@authenticate');
    Route::resource('posts', PostsController::class);

    Route::group(['middleware' => 'jwt.auth'], function () {

    });
});
