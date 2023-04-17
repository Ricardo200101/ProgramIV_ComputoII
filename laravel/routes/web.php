<?php

use Illuminate\Support\Facades\Route;
// Importamos el controlador. 
use App\Http\Controllers\TestController; 

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

// Creacion de una ruta. 

/*Route::get('/test', function () {
    return 'Primera aplicacion con Laravel';
});*/ 

Route::get('/test', function ([TestController::class, 'index']); 