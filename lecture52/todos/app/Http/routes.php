<?php

use Illuminate\Support\Facades\Route;
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

Route::group(['prefix' => 'demo'], function () {
	
	
	Route::get('/testJSON', function () {
		return ['Test'];
	
	});
	
	Route::get('/testBlade', function () {
		return view('demo/test', [
				'test' => 'This is the value of the test key'
		]);
	});
	
	Route::get('/testPurePhp', function () {
		return view('demo/testPurePhp', [
				'test' => 'This is the value of the test key'
		]);
	});
	
	Route::get('cross_site_request', function () {
		return view('demo/cross_site_login');
	});
	
	
});

Route::group(['middleware' => ['age']], function () {
	Route::get('/test', function () {
		return 'Test';
	});
});

Route::group(['namespace' => 'Demo'], function() {
	Route::get('/controller', 'TestController@test');
});

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
    
    	Route::get('csrf', function () {
    		return view('demo/csrf');
    	});
    	Route::post('/csrf', function () {
    		var_dump($_POST);
    	});

});



Route::group(['middleware' => 'web'], function () {
    Route::auth();
	
    Route::get('/home', 'HomeController@index');
});
