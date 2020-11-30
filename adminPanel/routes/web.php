<?php

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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Company Form Request Handler
Route::get('/companyForm', [App\Http\Controllers\CompanyController::class, 'index'])->middleware('auth');
Route::post('/create', [App\Http\Controllers\CompanyController::class, 'store'])->middleware('auth');

// Employee Form Request Handler
Route::get('/employeeForm', [App\Http\Controllers\EmployeeController::class, 'index'])->middleware('auth');
Route::post('/creates', [App\Http\Controllers\EmployeeController::class, 'store'])->middleware('auth');

// Gallery Image Request Handler
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->middleware('auth');

// Company List Request Handler
Route::get('/companyList', [App\Http\Controllers\ClistController::class, 'index'])->middleware('auth');
Route::get('/companyList/delete/{data}', [App\Http\Controllers\ClistController::class, 'delete'])->middleware('auth');
Route::get('/companyList/edit/{data}', [App\Http\Controllers\ClistController::class, 'show'])->middleware('auth');
Route::post('/companyList/edit/company/edit/{data}', [App\Http\Controllers\ClistController::class, 'edit'])->middleware('auth');

// Employee List Request Handler
Route::get('/employeeList', [App\Http\Controllers\ElistController::class, 'index'])->middleware('auth');
Route::get('/employeeList/delete/{data}', [App\Http\Controllers\ElistController::class, 'delete'])->middleware('auth');
Route::get('/employeeList/edit/{data}', [App\Http\Controllers\ElistController::class, 'show'])->middleware('auth');
Route::post('/employeeList/edit/employee/edit/{data}', [App\Http\Controllers\ElistController::class, 'edit'])->middleware('auth');