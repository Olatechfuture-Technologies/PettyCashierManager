<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{
    LoginController,
    StaffRegisterController,
    RegisterController
};

use App\Http\Controllers\{
    PurchaseController,
    ItemPurchaseController,
    HouseCashFlowController,
    WalletController,
    ServiceChargeController,
    DutyPostController,
    DutyActivityController,
    HouseController,
    DutyController,
    AdminController,
    StaffController,
    FlatController,
    PageController,
    TenantController,
    TenantWalletController,
    TenantCashFlowController,
    AdminAuthController,
    ResidentsAuthController,
    StaffAuthController,
    InvoiceController,
    RoleController,
    RolePermissionsController,
};

Route::prefix('residents-dahsboard')->name('residents.')->group(
    function () {
        Route::middleware(['guest'])->group(function () {
            Route::controller(LoginController::class)->group(function () {
                Route::get('/login',  'showLogin')->name('login');
                Route::post('/login',  'login')->name('login-attempt');
                Route::get('/forget-password',  'requestPassword')->name('forget-password');
            });
            Route::controller(RegisterController::class)->group(function () {
                Route::get('/register',  'showRegisterForm')->name('register-form');
                Route::post('/register',  'storeResident')->name('store');
            });
        });
        Route::middleware(['auth'])->group(function () {
            Route::controller(TenantController::class)->group(function () {
                Route::get('/profile',  'myProfile');
                Route::get('/change-password',  'changePassword');
                Route::get('/settings',  'settings');
                Route::get('/', 'dashboard')->name('dashboard');
            });
            Route::get('signout', [ResidentsAuthController::class, 'signOut'])->name('signout');
            Route::resource('wallet', WalletController::class)->only('index', 'store');
        });
    }
);
Route::prefix('cash-manager-portal')->group(function () {
    Route::prefix('staff-account')->name('staff.')->middleware(['guest:staff'])->group(function () {
        Route::controller(StaffAuthController::class)->group(function () {
            Route::get('/login',  'showLogin')->name('login');
            Route::post('/login',  'login')->name('login-attempt');

            Route::get('/forget-password',  'requestPassword')->name('forget-password');
        });
        Route::controller(StaffRegisterController::class)->group(function () {
            Route::get('/register',  'showRegisterForm')->name('register');
            Route::post('/register',  'store')->name('store-registeration');
        });
    });
    Route::prefix('admin-account')->name('admin.')->middleware(['guest:admin'])->group(function () {
        Route::controller(AdminAuthController::class)->group(function () {
            Route::get('/login',  'showLogin')->name('login');
            Route::post('/login',  'login')->name('login-attempt');
            Route::get('/register',  'registration')->name('register-user');
            Route::post('/register',  'customRegistration')->name('register');
        });
    });
    Route::prefix('admin-dashboard')->name('admin.')->group(function () {
        Route::middleware(['admin'])->group(function () {
            Route::resource('purchase', PurchaseController::class);
            Route::resource('item-purchase', ItemPurchaseController::class);
            Route::resource('house-cash-flow', HouseCashFlowController::class);
            Route::resource('wallet', WalletController::class);
            Route::resource('service-charge', ServiceChargeController::class);
            Route::resource('duty-post', DutyPostController::class);
            Route::resource('duty-activity', DutyActivityController::class);
            Route::resource('house', HouseController::class);
            Route::resource('duty', DutyController::class);
            Route::resource('admin', AdminController::class)->only('show', 'update', 'create');
            Route::resource('staff', StaffController::class)->except('create');
            Route::resource('house.flat', FlatController::class);
            Route::resource('flat', FlatController::class);
            Route::get('flat-wallet', [FlatController::class, 'flatWallet'])->name('flat-wallet');
            Route::resource('tenant', TenantController::class);
            Route::resource('tenant-wallet', TenantWalletController::class);
            Route::resource('tenant-cash-flow', TenantCashFlowController::class);
            Route::resource('invoices', InvoiceController::class);
            Route::get('roles', [RoleController::class, 'index']);
            Route::get('users-roles-permissions', [RolePermissionsController::class, 'index']);
            Route::get('profile', [AdminController::class, 'myProfile']);
            Route::get('settings', [AdminController::class, 'settings']);
            Route::get('signout', [AdminAuthController::class, 'signOut'])->name('signout');
            Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        });
    });
    Route::prefix('staff-dashboard')->name('staff.')->group(function () {
        Route::middleware(['staff'])->group(function () {
            Route::resource('purchase', PurchaseController::class);
            Route::resource('item-purchase', ItemPurchaseController::class);
            Route::resource('house-cash-flow', HouseCashFlowController::class);
            Route::resource('wallet', WalletController::class);
            // Route::resource('staff', StaffController::class);
            Route::resource('flat', FlatController::class);
            Route::resource('tenant', TenantController::class);
            Route::get('profile', [StaffController::class, 'myProfile']);
            Route::get('settings', [StaffController::class, 'settings']);
            Route::get('signout', [StaffAuthController::class, 'signOut'])->name('signout');
            Route::get('/', [StaffController::class, 'index'])->name('dashboard');
        });
    });
});

Route::get('/', [PageController::class, 'index'])->name('landingPage');
\Illuminate\Support\Facades\Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/makeme', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('optimize:clear');
    return "Successful done";
});

Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return "okay";
});