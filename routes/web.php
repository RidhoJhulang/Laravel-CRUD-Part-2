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

//use controller
Route::get('/nyobak', 'JaranController@index');

//use controller
//memunculkan function "home"
Route::get('/nyobak2', 'JaranController@home');

//pakai controller
// Route::get('Customer', 'CustomerController@index');
// Route::get('Customer/create', 'CustomerController@create');
// Route::get('Customer/store', 'CustomerController@store');
Route::resource('Customer', 'CustomerController');
Route::get('Karyawan', 'KaryawanController@index');
Route::get('Product', 'ProdukController@index');
// Route::get('Supplier/store', 'SupplierController@store');
// Route::get('Supplier', 'SupplierController@index');
// Route::get('Supplier/create', 'SupplierController'@create);
Route::resource('Supplier', 'SupplierController');
Route::resource('Employee', 'EmployeeController');

