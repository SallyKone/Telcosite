<?php

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

Route::name('index_path')->get('/', 'HomeController@home');
Route::name('realisation_path')->get('/realisation', 'RealisationController@realisation');



Route::post('users', 'UsersController@postUsers');

Route::post('/saveVisiteurs',['uses'=>'visiteursController@save','as'=>'saveUtilisateurs']);



/*route:: post('/', function(){
	dd(request ('nom'),('email'),('phone'),('message')
);
	


});*/

