<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

Route::resource('/expense_reports', ExpenseReportController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/expense_reports/{id}/confirmDelete', [ExpenseReportController::class, 'confirmDelete']);
Route::get('/expense_reports/{id}/confirmSendEmail', [ExpenseReportController::class, 'confirmSendEmail']);
Route::post('/expense_reports/{id}', [ExpenseReportController::class, 'sendEmail']);
Route::get('/expense_reports/{expense_report}/expenses/create', [ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [ExpenseController::class, 'store']);