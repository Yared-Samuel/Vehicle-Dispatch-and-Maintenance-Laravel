<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\costController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\fuelchartController;
use App\Http\Controllers\maintenanceController;
use App\Http\Controllers\maintenanceTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\repController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\requestController;

use App\Http\Controllers\SparepartController;
use App\Http\Controllers\tireChartController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vclCategoryController;
use App\Http\Controllers\vclController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







Route::middleware(['auth', 'Admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/request',requestController::class);
    Route::resource('/maintenance',maintenanceController::class);
    Route::resource('/vcls',vclController::class);
    Route::resource('/drivers',driverController::class);
    Route::resource('/tires',tireChartController::class);
    Route::resource('/cost',costController::class);    
    Route::resource('/fuel',fuelchartController::class);
    
    Route::get('/reports/fuel',[repController::class, 'fuel'])->name('reports.fuel');
    
     
});
    


require __DIR__.'/auth.php';
