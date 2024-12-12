<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

route::get('/login', [AuthController::class, 'login'])->name('login');
route::get('/register', [AuthController::class, 'register'])->name('register');
