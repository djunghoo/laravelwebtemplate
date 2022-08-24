<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;//เรียกใช้ controller สำหรับ backend 

Route::get('/', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('service', [HomeController::class, 'service']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('login', [HomeController::class, 'login']);

//backend route

Route::get('bn', [BackendController::class, 'dashboard']);
Route::get('bn/calendar', [BackendController::class, 'calendar']);
Route::get('bn/calendar', [BackendController::class, 'calendar']);
Route::get('bn/employees', [BackendController::class, 'employees']);
Route::get('bn/employeeslist', [BackendController::class, 'employeeslist']);
Route::get('bn/products', [BackendController::class, 'products']);