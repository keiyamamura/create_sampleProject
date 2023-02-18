<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\User\InfoController;

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
    return view('user.welcome');
});

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth:users'])->name('dashboard');

Route::middleware(['auth:users'])->group(function () {
    Route::get('/dashboard', [JobController::class, 'list'])
        ->name('dashboard');

    Route::prefix('applicant')->name('applicant.')->group(function () {
        Route::get('show/{id}', [ApplicantController::class, 'create'])
            ->name('create');
    });

    Route::prefix('job')->name('job.')->group(function () {
        Route::get('show/{id}', [JobController::class, 'show'])
            ->name('show');
    });

    Route::prefix('info')->name('info.')->group(function () {
        Route::get('show/{id}', [InfoController::class, 'show'])
            ->name('show');
        Route::get('edit/{id}', [InfoController::class, 'edit'])
            ->name('edit');
        Route::post('update/{id}', [InfoController::class, 'update'])
            ->name('update');
    });
});

require __DIR__.'/auth.php';
