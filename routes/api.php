<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ClasseController;
use App\Http\Controllers\API\FiliereController;
use App\Http\Controllers\API\EtudiantController;
use App\Http\Controllers\API\InscriptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

/*Route::middleware('auth:sanctum')->group( function () {
    Route::resource('blogs', BlogController::class);
});*/

Route::resource('classes',ClasseController::class);
Route::resource('filieres',FiliereController::class);
Route::resource('inscriptions',InscriptionController::class);
Route::resource('etudiants',EtudiantController::class);