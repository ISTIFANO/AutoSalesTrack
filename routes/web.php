<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\TestDriveController;
use App\Http\Controllers\ServiceRecordController;
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('inventories', InventoryController::class);
Route::resource('customers', CustomerController::class);
Route::resource('sales', SaleController::class);
Route::resource('payments', PaymentController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('reports', ReportController::class);
Route::resource('campaigns', CampaignController::class);
Route::resource('test_drives', TestDriveController::class);
Route::resource('service_records', ServiceRecordController::class);
Route::get('/', function () {
    return view('welcome');
});

