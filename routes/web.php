<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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

Route::middleware(['preventback'])->group(function () {
    Route::get('/', [loginController::class, 'showLogin'])->middleware('guest');
    Route::post('/', [loginController::class, 'login'])->name('login')->middleware('guest');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('page.index');
        });

        Route::get('/current-balance', function () {
            return view('page.current-balance');
        });

        Route::get('/main-income', function () {
            return view('page.main-income');
        });

        Route::get('/additional-income', function () {
            return view('page.additional-income');
        });

        Route::get('/main-expenses', function () {
            return view('page.main-expenses');
        });

        Route::get('/additional-expenses', function () {
            return view('page.additional-expenses');
        });

        Route::get('/report', function () {
            return view('page.report');
        });
    });
});
