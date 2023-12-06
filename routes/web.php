<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/pruebas', function () {
    return view('prueba');
});

Route::get('/variables/{id}', function ($id) {
    return "User with ID {$id}";
});


Route::get('/user', [UserController::class, 'pruebaMVC']);

Route::get('/MVC', [UserController::class, 'mvc']);

Route::get('/mvcvar', [UserController::class, 'mvcvar']);

  /*
return view('prueba')->with([
    'variable1' => $variable1,
    'variable2' => $variable2,
  ]);
  */
