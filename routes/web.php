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

Route::middleware(['auth'])->group(function(){
   
    /*------------------------------------------
     Deficion de Rutas para los Roles del Sistema
     -------------------------------------------- */
    Route::resource('roles', 'RoleController');
    /*------------------------------------------
     Deficion de Rutas para los Usuarios del Sistema
     -------------------------------------------- */
    Route::resource('users', 'UserController');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index');


Route::get('/clear-all', function() {
    Artisan::call('auth:clear-resets');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Todo Limpio";
});

Route::get('/migrate-s', function() {
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return "bd listo Baby";
});

Route::get('/slink', function() {
    Artisan::call('storage:link');
    return "link listo Baby";
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

// ruta de categoria

Route::group(
    [
        'namespace' => 'Categoria',
    ], function(){
        Route::resource('categoria', 'CategoriasController');
    }
);
