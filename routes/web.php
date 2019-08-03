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

Route::get('/', function () {
    return view('welcome');
});

//medicamento
Route::get('import', 'MedicineController@import')->name('import');

Route::post('insertExcel', 'MedicineController@insertExcel')->name('insertExcel');

//Nota fiscal
Route::post('insertXML', 'MedicineController@insertXML')->name('insertXML');

//Material
Route::get('importMaterial', 'MaterialController@import')->name('importMaterial');

Route::post('insertMaterial', 'MaterialController@insertExcel')->name('insertMaterialExcel');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
