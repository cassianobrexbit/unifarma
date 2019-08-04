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

Route::get('medicine/nfeindex','MedicineController@nfeIndex')->name('medicine/nfeindex');

//Nota fiscal
Route::post('insertXML', 'MedicineController@insertXML')->name('insertXML');

//Material
Route::get('importMaterial', 'MaterialController@import')->name('importMaterial');

Route::get('material/index', 'MaterialController@index')->name('material/index');

Route::post('insertMaterial', 'MaterialController@insertExcel')->name('insertMaterialExcel');

//Operações

Route::get('operation/createmd', 'OperationController@create')->name('operation/createmd');
Route::get('operation/createmt', 'OperationController@create')->name('operation/createmt');
Route::post('opstore', 'OperationController@store')->name('opstore');

Route::get('medicalRequest/create', 'MedicalRequestController@create')->name('medicalRequest/create');
Route::get('medicalRequest/index', 'MedicalRequestController@index')->name('medicalRequest/index');
Route::post('mreqstore', 'MedicalRequestController@store')->name('mreqstore');
Route::get('/medicalRequest/show/{id}', 'MedicalRequestController@show')->name('mreqstore.show');
/*
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $medicine = Medicine::where('tiss_code','LIKE','%'.$q.'%')->orWhere('commercial_name','LIKE','%'.$q.'%')->get();
    if(count($medicine) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
*/
