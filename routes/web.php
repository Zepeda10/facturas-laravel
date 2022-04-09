<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\FacturaController;

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

Route::get('/admin/panel', function () {
    return view('admin.panel');
})->name('admin.panel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/vender', 'App\Http\Controllers\HomeController@vender')->name('home.vender');

Route::resource('admin/productos',ProductoController::class);

Route::get('admin/facturas', 'App\Http\Controllers\FacturaController@index')->name('facturas.index');
Route::get('admin/facturas/{factura}', 'App\Http\Controllers\FacturaController@show')->name('facturas.show');
Route::post('admin/facturar', 'App\Http\Controllers\FacturaController@store')->name('facturas.store');

Route::resource('compras',CompraController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
