<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', 'welcomecontroller');
Route::get('success','welcomecontroller@index');

Route::view('Nos Simplonniens','Nos Simplonniens');

Route::view('Nous Contacter','Nous Contacter');

Route::view('Notre Equipe','Notre Equipe');

Route::get('/admin/actualities','actualitiescontroller@create')->name('root_path');

Route::resource('/admin/actualities', 'actualitiescontroller');


Route::get('/portrait', 'ApprenantsController@portrait');

Route::get('/create', 'ApprenantsController@create');

Route::get('alumnis/FormAlumni', 'AlumnisController@FormAlumni');

Route::post('/ajouter', 'ApprenantsController@strore');

Route::post('alumnis', 'AlumnisController@store2');

Route::get('alumnis/liste', 'AlumnisController@liste');

// Route::get('/admin/actualities','evenementscontroller@create')->name('root_path');

// Route::resource('/admin/actualities', 'evenementscontroller');




