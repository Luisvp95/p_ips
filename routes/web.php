<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\IpController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'verified'])->get('/admin', function () {
    return view('admin.index');
    
});
Route::group(['middleware'=> ['auth']], function(){
    Route::resource('areas', AreaController::class);
    Route::resource('ips', IpController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('roles', RoleController::class);

    });
