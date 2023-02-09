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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/custom', function () {
    $data = ['msj' => 'Mensaje desde el servidor', 'state' => 'OK'];
    return view('Custom.custom', $data);
});

Route::get('/contactame', function () {
    return view('Contact.contact');
})->name('contact');

Route::get('/testing', [App\Http\Controllers\TestController::class, 'testing'])->name('testing');