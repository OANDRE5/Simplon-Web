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


Route::view('/','welcome');
Route::view('Nos formations', 'Nos formations');

Route::view('Notre Equipes','Notre Equipes'); 

Route::view('Nous Contacter', 'Nous Contacter');

Route::get('simplonniens', 'SimplonniensController@index');

Route::get('simplonniens/create', 'SimplonniensController@create');

Route::get('projets/formProjet', 'ProjetController@formProjet');

Route::get('alumnis/formAlumnis', 'AlumnisController@formAlumnis');

Route::get('alumnis/liste', 'AlumnisController@liste');

// Route::get('simplonniens', 'SimplonniensController@relation');

Route::post('simplonniens', 'SimplonniensController@store');

Route::post('projets', 'ProjetController@enregister');

Route::post('alumnis', 'AlumnisController@store2');
    
    
  