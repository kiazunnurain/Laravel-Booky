<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DownloadsController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/adminpage', function () {
    return view('welbook');
})->middleware('auth');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return redirect('/')->with('success', 'Logout Successfuly');
})->name('logout');

Route::get('/databuku', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/insertdata', [BookController::class, 'insertdata']);
Route::get('/viewdata/{id}', [BookController::class, 'viewdata']);
Route::put('/updatedata/{id}', [BookController::class, 'updatedata']);
Route::get('/delete/{id}', [BookController::class, 'delete']);

Route::get('/dashboard', [BookController::class, 'dataBuku']);
Route::get('/my-profile', [BookController::class, 'profilePage']);
Route::get('/edit-profile', [BookController::class, 'editProfile']);
Route::post('download/{file}', [BookController::class, 'download']);

// Route::get('/auth', [SessionController::class, 'index']);
// Route::post('/auth/login', [SessionController::class, 'login']);
