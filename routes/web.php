<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChartAccountController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ContractorPayController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeSalaryController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialOrderController;
use App\Http\Controllers\OwnersEquityController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierPayController;
use App\Http\Controllers\TrashController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function(){

// Hospitals
    
Route::get('/manage/hospitals',[HospitalController::class, 'index']);
Route::get('/hospital/create',[HospitalController::class, 'create']);
Route::post('/hospital/store',[HospitalController::class, 'store']);
Route::get('/hospital/{id}/edit',[HospitalController::class, 'edit']);
Route::put('/hospital/{id}/update',[HospitalController::class, 'update']);
Route::get('/hospital/{id}/delete',[HospitalController::class, 'destroy']);

});