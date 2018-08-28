<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(array('prefix' => 'v1', 'middleware' => []), function () {
  // Route::get('user', ['as' => 'user.index', 'uses' => 'UserController@index']);
  // Route::get('user/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);
  // Route::post('user', ['as' => 'user.store', 'uses' => 'UserController@store']);
  // Route::put('user/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

  Route::post('register', 'AuthController@register');
  Route::post('login', 'AuthController@login');
  Route::post('recover', 'AuthController@recover');


  Route::apiResource('user','UserController');
  Route::apiResource('user_meta','UserMetaController');
  Route::apiResource('position','PositionController');
  Route::apiResource('demand','DemandController');

  // Route::resource('child','ChildController');

  // Route::resource('user_meta','UserMetaController');
});



Route::group(array('prefix' => 'v1', 'middleware' => ['jwt.auth']), function() {
  Route::get('logout', 'AuthController@logout');
  Route::post('test', function(){
    return response()->json(['foo'=>'bar']);
  });
  Route::get('test', function(){
    return response()->json(['foo1'=>'bar1']);
  });
});


