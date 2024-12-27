<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fetch-assignments', [HomeController::class, 'fetchAssignments'])->name('projects.fetch');
Route::get('account/login', [AuthController::class, 'login'])->name('account.login');
Route::get('account/register', [AuthController::class, 'register'])->name('account.register');
