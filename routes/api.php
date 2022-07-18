<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// menambahkan UserController untuk menyimpan data inputan dari frontend ke database
use App\Http\Controllers\UserController;

use App\Http\Controllers\HaditsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// api menampilkan list hadits
Route::get('list', [HaditsController::class, 'list']);

//api mencari hadits
Route::get('cari/{key}', [HaditsController::class, 'carihadits']);