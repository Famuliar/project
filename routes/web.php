<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('users.index');
Route::get('/create', [\App\Http\Controllers\MainController::class, 'create'])->name('users.create');
Route::post('/', [\App\Http\Controllers\MainController::class, 'createnew'])-> name('users.createnew');
Route::get('/{user}', [\App\Http\Controllers\MainController::class, 'show'])-> name('users.show');
Route::get('/{user}/edit', [\App\Http\Controllers\MainController::class, 'edit'])-> name('users.edit');
Route::patch('/{user}', [\App\Http\Controllers\MainController::class, 'update'])-> name('users.update');
Route::delete('/{user}', [\App\Http\Controllers\MainController::class, 'destroy'])-> name('users.delete');


//Route::get('about', function (){
//    return 'About page';
//});
