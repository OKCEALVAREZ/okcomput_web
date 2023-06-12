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

/*
| Routes Artisan
*/

use App\Http\Controllers\Evento\EventoController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('artisan', function () {
    Artisan::call('clear-compiled');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

// Auth::routes();

Route::get('/', 'HomeController@inicio')->name('inicio');
Route::get('microsoft365', 'HomeController@office365')->name('microsoft365');
Route::get('office2021', 'HomeController@office2021')->name('office2021');
Route::get('microsoft', 'HomeController@microsoft')->name('microsoft');
Route::get('windows', 'HomeController@windows')->name('windows');
Route::get('commercial-office', 'HomeController@commercialOffice')->name('commercial-office');
Route::get('novedades', 'HomeController@novedades')->name('novedades');
Route::get('catalogo', 'HomeController@catalogo')->name('catalogo');
Route::get('contacto', 'HomeController@contacto')->name('contacto');

Route::get('office365-okc', 'HomeController@officeTest')->name('office365-okc');

Route::name('eventos.')->prefix('eventos')->group(function () {
    Route::name('dell.')->prefix('dell')->group(function () {
        Route::get('formulario', [EventoController::class, 'index'])->name('formulario');
        Route::post('guardar', [EventoController::class, 'guardar'])->name('guardar');
    });
});