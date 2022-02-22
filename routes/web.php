<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('a-propos', function () {
    return view('a-propos');
});
Route::get('clients', [ClientsController::class , 'index']);
Route::get('clients/create', [ClientsController::class , 'create']);

Route::post('clients', [ClientsController::class , 'AddClient']);

Route::post('entreprises', [ClientsController::class , 'AddEntreprise']);
