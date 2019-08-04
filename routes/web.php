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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//medicamento
Route::get('import', 'MedicineController@import')->name('import');

Route::post('insertExcel', 'MedicineController@insertExcel')->name('insertExcel');

Route::get('medicine/index','MedicineController@index')->name('medicine/index');
Route::get('/medicine/show/{id}', 'MedicineController@show')->name('medicine.show');

Route::get('medicine/nfeindex','MedicineController@nfeIndex')->name('medicine/nfeindex');

//Nota fiscal
Route::post('insertXML', 'MedicineController@insertXML')->name('insertXML');

//Material
Route::get('importMaterial', 'MaterialController@import')->name('importMaterial');
Route::get('/material/show/{id}', 'MaterialController@show')->name('material.show');

Route::get('material/index', 'MaterialController@index')->name('material/index');

Route::post('insertMaterial', 'MaterialController@insertExcel')->name('insertMaterialExcel');

//Operações

Route::get('operation/createmd', 'OperationController@create')->name('operation/createmd');
Route::get('operation/createmt', 'OperationController@create')->name('operation/createmt');
Route::post('opstore', 'OperationController@store')->name('opstore');

Route::get('medicalRequest/create', 'MedicalRequestController@create')->name('medicalRequest/create');
Route::get('medicalRequest/index', 'MedicalRequestController@index')->name('medicalRequest/index');

Route::get('medicalRequest/edit/{id}', 'MedicalRequestController@edit')->name('medicalRequest/edit');

Route::patch('mrequpdate/{id}', 'MedicalRequestController@update')->name('mrequpdate');
Route::resource('medicalRequest','MedicalRequestController');

Route::post('mreqstore', 'MedicalRequestController@store')->name('mreqstore');
Route::get('/medicalRequest/show/{id}', 'MedicalRequestController@show')->name('mreqstore.show');


//Items medicamento
Route::get('meditems/create', 'MedicineItemController@create')->name('meditems.create');
Route::post('meditemstore', 'MedicineItemController@store')->name('meditemstore');

//relatorios

Route::get('/reports/index', 'ReportsController@index')->name('reports/index');
Route::get('/reports/medicineItemsByStatus', 'ReportsController@medicineItemsIndexByStatus')->name('reports/medicineItemsByStatus');
Route::get('/reports/medicineItemsExecuted', 'ReportsController@medicineItemsExecuted')->name('reports/medicinesItemExecuted');
Route::get('/reports/medicineItemsExpiring', 'ReportsController@medicineItemsExpiringIn30Days')->name('reports/medicinesItemsExpiring');
Route::get('/reports/medicalRequestsExpiring', 'ReportsController@medicalRequestsExpiringIn30Days')->name('reports/medicalRequestsExpiring');
Route::get('/reports/medicalRequestsCanceled', 'ReportsController@medicalRequestsCanceled')->name('reports/medicalRequestsCanceled');
Route::get('/reports/medicalRequestsExecuted', 'ReportsController@medicalRequestsExecuted')->name('reports/medicalRequestsExecuted');
Route::get('/reports/medicalRequestsExpired', 'ReportsController@medicalRequestsExpired')->name('reports/medicalRequestsExpired');
