<?php
use App\Http\Controllers\ComputationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{operator}/{num1}/{num2}', [ComputationController::class, 'compute']); //Dito ung tinaype ng user tapos kung ano ung gagawin ng route sa user input

