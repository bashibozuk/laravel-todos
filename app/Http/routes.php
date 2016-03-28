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

    Route::group(['namespace' => 'Test'], function() {
        Route::get('/crud', function() {


            $todo = new \App\Todo();
            $todo->user_id = 1;
            $todo->text = 'Reminder';
            $todo->save();
            echo 'Selected todo with id ' . $todo->id, PHP_EOL;


            $todo = \App\Todo::find($todo->id);


            var_dump('Todo text is :' . $todo->text);
            var_dump('Todo id is :' . $todo->id );
            $todo->text = 'Reminder revised';
            $todo->save();
            echo 'Saving one todo', PHP_EOL;
            echo 'Selected todo with id ' . $todo->id, PHP_EOL;
            $todo = \App\Todo::find($todo->id);

            //  $todo->delete();
            echo 'No more todo ' , PHP_EOL;

            var_dump(\App\Todo::find(1));
        });
    });


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::group(['namespace' => 'Test'], function() {
       Route::get('test/test', 'IndexController@index');
    });

    Route::get('todos', 'TodosController@index');
});
