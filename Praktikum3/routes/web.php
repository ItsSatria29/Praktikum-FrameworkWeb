<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('home'); // halaman home default
});

// route CRUD game
Route::resource('game', GameController::class);
