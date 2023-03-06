<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\systemController;
use App\Http\Controllers\serviceController;
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

//Inicio da rota de envio de email
Route::post('sendEmail', [systemController::class, 'sendEmail'])->name('sendEmail');

//Inicio das rotas do services
Route::get('firstService', [serviceController::class, 'firstService'])->name('firstService');
Route::get('secondService', [serviceController::class, 'secondService'])->name('secondService');
Route::get('thirdService', [serviceController::class, 'thirdService'])->name('thirdService');
Route::get('fourthService', [serviceController::class, 'fourthService'])->name('fourthService');
Route::get('fifthService', [serviceController::class, 'fifthService'])->name('fifthService');
Route::get('sixthService', [serviceController::class, 'sixthService'])->name('sixthService');