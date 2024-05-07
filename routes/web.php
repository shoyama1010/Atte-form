<?php

use Illuminate\Support\Facades\Route;
use App\Models\Attendance;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AttendanceController;
// use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index']);

    Route::post('/punch-in', [AttendanceController::class, 'punchIn'])->name('punch-in');
    Route::post('/punch-out', [AttendanceController::class, 'punchOut'])->name('punch-out');
    Route::get('/attendance', [AttendanceController::class, 'attendance'])->name('attendance-history');
});
