<?php

use App\Http\Controllers\courseConroller;
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
Route::get('/course',[courseConroller::class,'index'])->name('course.index'); 
Route::get('/course/create',[courseConroller::class,'create'])->name('course.create');

Route::get('/course/show/{id}',[courseConroller::class,'show'])->name('course.show');





 Route::post('/course/store',[courseConroller::class,'store'])->name('course.store');



 Route::get('/course/edit{id}',[courseConroller::class,'edit'])->name('course.edit');
 
Route::put('/course/update/{id}',[courseConroller::class,'update'])->name('course.update');

Route::delete('/course/delete/{id}',[courseConroller::class,'delete'])->name('course.delete'); 




