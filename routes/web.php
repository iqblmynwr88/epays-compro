<?php

use App\Http\Controllers\ContentWebController;
use App\Http\Controllers\SignUpController;
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

// Route::get('/', function () {return view('home.index');});
Route::get('/',[ContentWebController::class, 'index']);
Route::get('/signup',[SignUpController::class, 'index']);
Route::post('/pendaftaran',[SignUpController::class, 'auth']);
Route::get('/dashboard', function () { return redirect('http://localhost:91');});
