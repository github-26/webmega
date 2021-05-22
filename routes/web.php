<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home0106',[HomeController::class, 'index']);
Route::get('/artikel0106',[ArtikelController::class, 'hal2']);
Route::get('/kontak0106',[KontakController::class, 'hal_3']);