<?php

use App\Http\Controllers\TicketController;
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
    return Inertia::render('Index');
});


Route::controller(UserController::class)->group( function(){
    Route::inertia('userget', 'index')->name('user_get');
    Route::get('usercreate','create')->name('user_create');
    Route::get('useredit/{id}', 'edit')->name('user_edit');
})->middleware('control');

Route::get('/dashboard', function(){
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::controller(TicketController::class)->group( function(){
    Route::inertia('ticketget','index')->name('ticket_get');
    Route::inertia('ticketcreate','store')->name('ticket_create');
    Route::post('ticketupdate/{id}', 'update')->name('ticket_update');
    Route::get('ticketdelete/{id}','destroy')->name('ticket_delete');
    Route::get('cancel','cancel')->name('cancel');
});



