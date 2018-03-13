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
Route::get('admin\empleados\descripcion.blade.php',[
    'as'=> 'admin.empleados.descripcion'
]);
Route::group(['prefix' => 'empleado'],function(){
    Route::resource('empleado','EmpleadosController');
    
    Route::get('empleado/{id}/destroy',[
        'uses' =>'EmpleadosController@destroy',
        'as'=> 'admin.empleados.destroy'
    ]);
    Route::get('resumen',[
        'uses' =>'ResumenController@index',
        'as'=> 'admin.empleados.resumen'
    ]);
});

