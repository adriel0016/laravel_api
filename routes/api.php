<?php

use App\Business\Controllers\Api\v1\Auth\AuthenticateController;

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

Route::group(['middleware'  =>  'cors'], function () {
    Route::group(['prefix'=>'v1','as'=>'v1.'], function () {
        Route::post('login', 'Api\v1\Auth\AuthenticateController@authenticate');
        Route::resource('entidades', 'Api\v1\Generic\EntidadesController');
    });



    Route::group(['middleware' => 'jwt.auth'], function () {

    });
});
