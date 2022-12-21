<?php

use App\Http\Controllers\GeneralController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('resume', [GeneralController::class, 'index1']);
Route::get('works', [GeneralController::class, 'index2']);
Route::get('gallery', [GeneralController::class, 'index3']);
Route::get('contact', [GeneralController::class, 'index4']);
Route::get('resume', [GeneralController::class, 'resume']);

