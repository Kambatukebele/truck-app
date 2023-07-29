<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Account\AdminDashboardController;
use App\Http\Controllers\Account\BrokerDashboardController;
use App\Http\Controllers\Account\CarrierDashboardController;
use App\Http\Controllers\Account\ShipperDashboardController;
use App\Http\Controllers\Account\GlobalUserDashboardController;

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

// Route::get('/retrieve', function (User $user, Role $role){
//     $user = User::where('id', 1)->with(['role'])->get();  
//     return $user; 
// }); 

Route::prefix('account')->group(function (){
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/broker-dashboard', [BrokerDashboardController::class, 'index']);
    Route::get('/carrier-dashboard', [CarrierDashboardController::class, 'index']);
    Route::get('/shipper-dashboard', [ShipperDashboardController::class, 'index']);
    Route::get('/global-user-dashboard', [GlobalUserDashboardController::class, 'index']);
});

Route::get('/account', function (){
    return "account"; 
})->middleware(['auth', 'verified'])->name('account');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';