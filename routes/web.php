<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Account\AdminDashboardController;
use App\Http\Controllers\Account\BrokerDashboardController;
use App\Http\Controllers\Account\CarrierDashboardController;
use App\Http\Controllers\Account\ShipperDashboardController;
use App\Http\Controllers\Account\GlobalUserDashboardController;
use App\Http\Controllers\Account\LogoutController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BrokerProfileController;
use App\Http\Controllers\LoadController;
use Spatie\Activitylog\Models\Activity;

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
    return Activity::all()->last(); 
    return view('welcome');
});


Route::get('/retrieve', function (User $user, Role $role){
    // $user = Auth::user()->with(['role']); 
    // return $user->role_id; 
    // $user = User::where('id', 1)->with(['role'])->get();  
    // return $user; 
}); 

Route::prefix('account')->group(function (){
    // Profile
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //End Profile
    /**
     * Admin Dashboard
     */
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth','isAdmin', 'verified'])->name('admin-dashboard');
    Route::get('/admin-dashboard/logs', [AdminDashboardController::class, 'logs'])->middleware(['auth','isAdmin', 'verified'])->name('admin.logs');
    
    //Admin Profile
    Route::get('/admin-dashboard/profile', [AdminProfileController::class, 'edit'])->middleware(['auth','isAdmin', 'verified'])->name('admin-profile.edit');
    Route::patch('/admin-dashboard/profile', [AdminProfileController::class, 'update'])->middleware(['auth','isAdmin', 'verified'])->name('admin-profile.update');
    Route::delete('/admin-dashboard/profile', [AdminProfileController::class, 'destroy'])->middleware(['auth','isAdmin', 'verified'])->name('admin-profile.destroy');
   



    /**
     * Broker Dashboard
     */
    Route::get('/broker-dashboard', [BrokerDashboardController::class, 'index'])->middleware('auth', 'isBroker', 'verified' );
    //Broker Profile
    Route::get('/broker-dashboard/profile', [BrokerProfileController::class, 'edit'])->middleware(['auth','isBroker', 'verified'])->name('broker-profile.edit');
    Route::patch('/broker-dashboard/profile', [BrokerProfileController::class, 'update'])->middleware(['auth','isBroker', 'verified'])->name('broker-profile.update');
    Route::delete('/broker-dashboard/profile', [BrokerProfileController::class, 'destroy'])->middleware(['auth','isBroker', 'verified'])->name('broker-profile.destroy');

    //Broker Loads
    Route::get('/broker-dashboard/loads', [LoadController::class, 'index'])->middleware(['auth', 'isBroker', 'verified'])->name('broker-load');
    Route::get('/broker-dashboard/loads/create', [LoadController::class, 'create'])->middleware(['auth', 'isBroker', 'verified'])->name('broker-load-create');
    Route::post('/broker-dashboard/loads/store', [LoadController::class, 'store'])->middleware(['auth', 'isBroker', 'verified'])->name('broker-load-store');
    //To fetch data on Click using JavaScript
    Route::get('/broker-dashboard/loads/get-data', [LoadController::class, 'getData'])->middleware(['auth', 'isBroker', 'verified'])->name('broker-load-get-data'); 
    
   
    /**
     * Carrier Dashboard
     */
    Route::get('/carrier-dashboard', [CarrierDashboardController::class, 'index'])->middleware('auth', 'isCarrier', 'verified');
    /**
     * Shipper Dashboard
     */
    Route::get('/shipper-dashboard', [ShipperDashboardController::class, 'index'])->middleware('auth', 'isShipper', 'verified');
    /**
     * Global Dashboard
     */
    Route::get('/global-user-dashboard', [GlobalUserDashboardController::class, 'index'])->middleware('auth', 'isGlobalUser', 'verified');
     //Logout users
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

// Route::get('/account', function (){
//     return "account"; 
// })->middleware(['auth', 'verified'])->name('account');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';