<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/demo', [DemoController::class, 'DemoAction']);

/*
|--------------------------------------------------------------------------
| Web Routes
https://github.com/rupomsoft/Laravel-Batch/blob/main/Laravel-Query-Builder-Practice-Database/teamrabb_craftybay.sql
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
