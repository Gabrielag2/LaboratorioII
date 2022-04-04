<?php

use Illuminate\Support\Facades\Route;
use App\Http\livewire\Estudiantes; 

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
    return view('auth.login ');
});

Route::middleware(['auth:sanctum','verified'])->group(function(){ 
    Route::get('/estudiantes', Estudiantes::class);
    Route::get('/dashboard', function(){ 
        return view('dashboard');
    })->name('dashboard'); 
});

