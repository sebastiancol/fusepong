<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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
    return Inertia::render('Index', [
        'message' => 'Hello, Inertia.js with React!',
    ]);
});

Route::controller(UserController::class)->group( function(){

    Route::get('userget',  'index')->name('user_get');
    Route::get('usercreate','create')->name('user_create');
    Route::post('userstore','store')->name('user_store');
    Route::get('useredit/{id}', 'edit')->name('user_edit');
    Route::post('userupdate/{id}', 'update')->name('user_update');
    Route::get('userdelete/{id}','destroy')->name('user_delete');
    Route::get('cancel','cancel')->name('cancel');
   

})->middleware('control');

Route::get('/dashboard', function(){

    return Inertia::render('Dashboard',[
        
    ]);

})->name('dashboard');

//Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');