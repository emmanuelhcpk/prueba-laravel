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
    return view('auth.login');
});

Route::get('/mail', function () {

    return view('email.nuevo_pin');
});

Route::group(['middleware' => 'auth'], function () { //rutas que requieren autenticacion
    Route::group(['middleware' => 'admin.activo'], function () { //rutas que requieren autenticacion

        Route::get('/home', 'DashboardController@index')->name('home');
        Route::get('/reportes', 'Admin\ReportesController@index')->name('reportes');
        Route::resource('ordenes', 'Admin\OrdenController');
        Route::resource('gestion-admins', 'Admin\GestionAdminsController');

    });
    Route::get('/ordenes/notificaciones/{id}', 'Admin\OrdenController@getNotificaciones');
    Route::get('/ordenes/estados/{id}', 'Admin\OrdenController@getEstados');
    Route::get('/ordenes/respuestas/{id}', 'Admin\OrdenController@getRespuestas');
    Route::get('/ordenes/fecha/{mes}', 'Admin\OrdenController@getOrdenes');
    Route::get('/buscar/', 'Admin\OrdenController@buscar')->name('buscar');

});

Auth::routes();

Route::get('500', function () {
    abort(500);
});

//Route::controller
#reportes de usuario
//Route::controller('usuarios', 'Admin\GestionUsuariosController');


