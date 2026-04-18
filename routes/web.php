<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\StockRoomsController;
use App\Http\Controllers\Backend\OriginController;



Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/verify', [AdminController::class, 'ShowVerification'])->name('custom.verification.form');
Route::post('/verify', [AdminController::class, 'VerificationVerify'])->name('custom.verification.verify');
Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');


Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('profile.admin');
    Route::post('/admin/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
    Route::put('/admin/password/update', [AdminController::class, 'PasswordUpdate'])->name('admin.password.update');


});

Route::middleware('auth')->group(function () {

Route::controller(BrandController::class)->group(function () {
    Route::get('/all/brand', 'AllBrand')->name('all.brand');
    Route::get('/add/brand', 'AddBrand')->name('add.brand');
    Route::post('/store/brand', 'StoreBrand')->name('store.brand');
    Route::get('/edit/brand/{id}', 'EditBrand')->name('edit.brand');
    Route::post('/update/brand', 'UpdateBrand')->name('update.brand');
    Route::get('/delete/brand/{id}', 'DeleteBrand')->name('delete.brand');
    });

Route::controller(StockRoomsController::class)->group(function () {
    Route::get('/all/stockrooms', 'AllStockRooms')->name('all.stockrooms');
    Route::get('/add/stockrooms', 'AddStockRooms')->name('add.stockrooms');
    Route::post('/store/stockrooms', 'StoreStockRooms')->name('store.stockrooms');
    Route::get('/edit/stockrooms/{id}', 'EditStockRooms')->name('edit.stockrooms');
    Route::post('/update/stockrooms', 'UpdateStockRooms')->name('update.stockrooms');
    Route::get('/delete/stockrooms/{id}', 'DeleteStockRooms')->name('delete.stockrooms');
    });

Route::controller(OriginController::class)->group(function () {
    // Origin Routes
    Route::get('/all/origin', 'AllOrigin')->name('all.origin');
    Route::get('/add/origin', 'AddOrigin')->name('add.origin');
    Route::post('/store/origin', 'StoreOrigin')->name('store.origin');
    Route::get('/edit/origin/{id}', 'EditOrigin')->name('edit.origin');
    Route::post('/update/origin', 'UpdateOrigin')->name('update.origin');
    Route::get('/delete/origin/{id}', 'DeleteOrigin')->name('delete.origin');

    // Borrower Routes
    Route::get('/all/borrower', 'AllBorrower')->name('all.borrower');
    Route::get('/add/borrower', 'AddBorrower')->name('add.borrower');
    Route::post('/store/borrower', 'StoreBorrower')->name('store.borrower');
    Route::get('/edit/borrower/{id}', 'EditBorrower')->name('edit.borrower');
    Route::post('/update/borrower', 'UpdateBorrower')->name('update.borrower');
    Route::get('/delete/borrower/{id}', 'DeleteBorrower')->name('delete.borrower');
});







});


