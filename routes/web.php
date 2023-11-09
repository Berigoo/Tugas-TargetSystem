<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
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

Route::get('/form', [Main::class, 'getForm']);
Route::get('/formold', [Main::class, 'getFormOld']);
Route::post('/form/verify', [Main::class, 'postForm']);
Route::get('/form/verifyold', [Main::class, 'postFormOld']);
Route::get('/form/test', [Main::class, 'postFormUnfilter']);
Route::get('/denied', function (){
    return view('forbidden');
});
