<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/edit/{id}', [SiteController::class, 'edit']);
Route::post('/update/{id}', [SiteController::class, 'update']);
Route::post('/save', [SiteController::class, 'save']);
Route::get('/delete/{id}', [SiteController::class, 'delete']);
Route::get('/create', [SiteController::class, 'create']);
Route::post('/insert', [SiteController::class, 'insert']);
Route::get('/change-key', [SiteController::class, 'changeKey']);
Route::get('/test', [SiteController::class, 'test']);