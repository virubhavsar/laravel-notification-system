<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{id}/impersonate', [UserController::class, 'impersonate'])->name('users.impersonate');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{user}/settings', [UserController::class, 'edit'])->name('users.settings');


Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::get('notifications/create', [NotificationController::class, 'create'])->name('notifications.create');
Route::get('notifications/{notification}/read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
