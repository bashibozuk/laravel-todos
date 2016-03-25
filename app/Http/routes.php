<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web'], 'prefix' => 'demo'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/test', function () {
        return 'Test';
    });

    Route::get('/testJSON', function () {
        return ['Test'];
    });

    Route::get('/testBlade', function () {
        return view('demo/test', [
            'test' => 'Testing 123'
        ]);
    });

    Route::get('/testRenderPhp', function () {
        return view('demo/test_pure_php', [
            'test' => 'Testing 123'
        ]);
    });

    Route::get('/controller', 'TestController@test');

    Route::any('/form', function(){
        $formData = Request::input('data') ?: [];

        return view('demo/form', ['data' => $formData]);
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::group(['namespace' => 'Test'], function() {
       Route::get('test/test', 'IndexController@index');
    });
});
