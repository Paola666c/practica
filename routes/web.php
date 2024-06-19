<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PresentacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function ()
{
return "Hola mundo";
});

Route::get('presentacion',[PresentacionController::class,'index']);
Route::get('login',[FormController::class,'index']);
Route::post('validate',[FormController::class,'login'])
        ->name('login.validate');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
