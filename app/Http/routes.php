<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



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
Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', 'HomeController@index');
	Route::auth();

    // //Login Routes...
    // Route::get('login', 'Auth\AuthController@getLogin');
    // Route::post('login','Auth\AuthController@postLogin');
    // // Registration routes...
    // Route::get('register', 'Auth\AuthController@getRegister'); 
    // Route::post('register', 'Auth\AuthController@postRegister');  


    // Route::get('user/login', 'StudentAuth\AuthController@getLogin');
    // Route::post('user/login', 'StudentAuth\AuthController@postLogin');
    // Route::get('user/logout', 'StudentAuth\AuthController@logout');

    // Route::get('admin/login', 'AdminAuth\AuthController@showLoginForm');
    // Route::post('admin/login', 'AdminAuth\AuthController@postLogin');
    // Route::get('admin/logout', 'AdminAuth\AuthController@logout');

    
    // Route::get('supervisor/login', 'SupervisorAuth\AuthController@getLogin');
    // Route::post('supervisor/login', 'SupervisorAuth\AuthController@postLogin');
    // Route::get('supervisor/logout', 'SupervisorAuth\AuthController@logout');


    /*
    *---------------------------*
    | Here are the views for all|     
    | users.                    |
    | \('_=_')/                 | 
    |---------------------------*
    */
    

    //Admin Views
    Route::get('admin/dashboard', 'AdminController@home');
	Route::get('admin/projects', 'ProjectController@index');
	Route::get('admin/add-topic', 'AdminController@addtopic');
	Route::get('admin/view-alloc', 'ProjectController@viewalloc');
	Route::get('admin/users/students', 'AdminController@create');
	Route::get('admin/users/supervisors', 'AdminController@supervisors');
	Route::get('admin/grouping', 'AdminController@grouping');
	

	//Supervisor Views
	Route::get('supervisor/home', 'SupervisorController@home');
	Route::get('supervisor/add-topic', 'SupervisorController@addtopic');
	Route::get('supervisor/view-topics', 'SupervisorController@viewtopics');

    //students
    Route::post('/students/add', 'AdminController@store');
	
});

    // Route::get('/', function () {
    //      return view('index');
    // });


