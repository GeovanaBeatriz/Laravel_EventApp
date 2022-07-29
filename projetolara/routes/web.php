<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController; //Importando o controller que utilzamos

Route::get('/', [EventController::class, 'index']); //Indicando onde o controller está localizado
Route::get('/events/create', [EventController::class, 'create']);

Route::post('/events', [EventController::class, 'store']);


Route::get('/contact', function () {
    return view('contact');
});



