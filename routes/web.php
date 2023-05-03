<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\costController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\exportController;
use App\Http\Controllers\fuelchartController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\maintenanceController;
use App\Http\Controllers\printController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\repController;
use App\Http\Controllers\requestController;
use App\Http\Controllers\spareinvController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\Spareuse;
use App\Http\Controllers\spareuseController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vclController;
// use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });

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
    Route::resource('/items',itemController::class);
    Route::resource('/request',requestController::class);
    Route::resource('/maintenance',maintenanceController::class);
    Route::resource('/vcls',vclController::class);
    Route::resource('/drivers',driverController::class);
    Route::resource('/cost',costController::class);    
    Route::resource('/fuel',fuelchartController::class);       
    Route::resource('/spareuse',spareuseController::class);
    Route::resource('/spareinv',spareinvController::class);
    Route::get('/reports/stock',[repController::class, 'stock'])->name('reports.stock');
    
    Route::get('/reports/fuel',[repController::class, 'index'])->name('reports.fuel');

    Route::get('/print/{export}',[printController::class, 'export_inv_grn'])->name('printspareinv.export');
    Route::get('/print/spareuseexp/{exp}',[printController::class, 'export_use_grn'])->name('printspareuse.export');
    Route::get('/cost/create/{rqst}',[costController::class, 'add_cost'])->name('cost.add');
    Route::get('/export/fuelexport', [exportController::class, 'fuelExport'])->name('export.fuel');


});
// Route::middleware(['auth', 'user'])->name('admin.')->prefix('admin')->group(function(){
//     Route::get('/', [UserController::class, 'index'])->name('index');
//     Route::resource('/request',requestController::class);
//     Route::resource('/maintenance',maintenanceController::class);
//     Route::resource('/vcls',vclController::class);
//     Route::resource('/drivers',driverController::class);
//     Route::resource('/cost',costController::class);    
//     Route::resource('/fuel',fuelchartController::class);       
//     Route::resource('/spareuse',spareuseController::class);
//     Route::resource('/spareinv',spareinvController::class);
//     Route::get('/reports/stock',[repController::class, 'stock'])->name('reports.stock');
    
//     Route::get('/reports/fuel',[repController::class, 'index'])->name('reports.fuel');

//     Route::get('/print/{export}',[printController::class, 'export_inv_grn'])->name('printspareinv.export');
//     Route::get('/print/spareuseexp/{exp}',[printController::class, 'export_use_grn'])->name('printspareuse.export');



// });

// Route::view('components/fuel-table', [exportController::class, 'fueltable'])->name('fuel.table');
    



// registration and so on








require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
