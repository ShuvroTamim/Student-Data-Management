<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


route::get('/', [StudentController::class,'display'])->name('add');

Route::prefix('user')->group(function (){
route::post('/add', [StudentController::class,'save']);

Route::get('/studentview',[StudentController::class,'viewform']);

Route::get('/studentview',[StudentController::class,'index'])->name('dashboard');

Route::get('edit/{id}', [StudentController::class,'edit'])->name('edit');

Route::post('/update/{id}',[StudentController::class,'update'])->name('update');

Route::get('/delete/{id}',[StudentController::class,'delete']);
});





Route::get('/home',[StudentController::class,'admin']);
