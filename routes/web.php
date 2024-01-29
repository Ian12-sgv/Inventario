<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\EquipoController;



route::get('/', function (){
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/area', AreaController::class)->middleware('auth');
    Route::resource('/equipo', EquipoController::class)->middleware('auth');

});

