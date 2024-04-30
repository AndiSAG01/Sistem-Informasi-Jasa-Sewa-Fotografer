<?php

use App\Http\Controllers\Admin\AqiqahController;
use App\Http\Controllers\Admin\BasicController;
use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EngagementController;
use App\Http\Controllers\Admin\FamillyController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\PreWeddingController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreFullController;
use App\Http\Controllers\Admin\WeddingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Prewedding_TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['admin:1'])->group(function(){
    Route::get('admin',[DashboardController::class, 'index'])->name('dashboard');

    #costumers
    Route::get('/admin/costumers',[CostumerController::class, 'index'])->name('costumers');
    Route::get('/admin/costumers/{id}',[CostumerController::class, 'detail'])->name('costumers.detail');
    Route::delete('/admin/costumers/{id}',[CostumerController::class, 'destroy'])->name('costumers.destroy');

    #package Basic
    Route::get('/admin/package-basics',[BasicController::class, 'index'])->name('basics');
    Route::post('/admin/package-basics',[BasicController::class, 'store'])->name('basics.store');
    Route::get('/admin/package-basics/{id}',[BasicController::class, 'edit'])->name('basics.edit');
    Route::put('/admin/package-basics/{id}',[BasicController::class, 'update'])->name('basics.update');
    Route::delete('/admin/package-basics/{id}',[BasicController::class, 'destroy'])->name('basics.destroy');
    #package PreWedding
    Route::get('/admin/package-preweddings',[PreWeddingController::class, 'index'])->name('preweddings');
    Route::post('/admin/package-preweddings',[PreWeddingController::class, 'store'])->name('preweddings.store');
    Route::get('/admin/package-preweddings/{id}',[PreWeddingController::class, 'edit'])->name('preweddings.edit');
    Route::put('/admin/package-preweddings/{id}',[PreWeddingController::class, 'update'])->name('preweddings.update');
    Route::delete('/admin/package-preweddings/{id}',[PreWeddingController::class, 'destroy'])->name('preweddings.destroy');
    #package Wedding
    Route::get('/admin/package-weddings',[WeddingController::class, 'index'])->name('weddings');
    Route::post('/admin/package-weddings',[WeddingController::class, 'store'])->name('weddings.store');
    Route::get('/admin/package-weddings/{id}',[WeddingController::class, 'edit'])->name('weddings.edit');
    Route::put('/admin/package-weddings/{id}',[WeddingController::class, 'update'])->name('weddings.update');
    Route::delete('/admin/package-weddings/{id}',[WeddingController::class, 'destroy'])->name('weddings.destroy');
    #package Engagement
    Route::get('/admin/package-engagements',[EngagementController::class, 'index'])->name('engagements');
    Route::post('/admin/package-engagements',[EngagementController::class, 'store'])->name('engagements.store');
    Route::get('/admin/package-engagements/{id}',[EngagementController::class, 'edit'])->name('engagements.edit');
    Route::put('/admin/package-engagements/{id}',[EngagementController::class, 'update'])->name('engagements.update');
    Route::delete('/admin/package-engagements/{id}',[EngagementController::class, 'destroy'])->name('engagements.destroy');
    #package Aqiqah
    Route::get('/admin/package-aqiqahs',[AqiqahController::class, 'index'])->name('aqiqahs');
    Route::post('/admin/package-aqiqahs',[AqiqahController::class, 'store'])->name('aqiqahs.store');
    Route::get('/admin/package-aqiqahs/{id}',[AqiqahController::class, 'edit'])->name('aqiqahs.edit');
    Route::put('/admin/package-aqiqahs/{id}',[AqiqahController::class, 'update'])->name('aqiqahs.update');
    Route::delete('/admin/package-aqiqahs/{id}',[AqiqahController::class, 'destroy'])->name('aqiqahs.destroy');
    #package Personal
    Route::get('/admin/package-personals',[PersonalController::class, 'index'])->name('personals');
    Route::post('/admin/package-personals',[PersonalController::class, 'store'])->name('personals.store');
    Route::get('/admin/package-personals/{id}',[PersonalController::class, 'edit'])->name('personals.edit');
    Route::put('/admin/package-personals/{id}',[PersonalController::class, 'update'])->name('personals.update');
    Route::delete('/admin/package-personals/{id}',[PersonalController::class, 'destroy'])->name('personals.destroy');
    #package Group
    Route::get('/admin/package-groups',[GroupController::class, 'index'])->name('groups');
    Route::post('/admin/package-groups',[GroupController::class, 'store'])->name('groups.store');
    Route::get('/admin/package-groups/{id}',[GroupController::class, 'edit'])->name('groups.edit');
    Route::put('/admin/package-groups/{id}',[GroupController::class, 'update'])->name('groups.update');
    Route::delete('/admin/package-groups/{id}',[GroupController::class, 'destroy'])->name('groups.destroy');
    #package Familly
    Route::get('/admin/package-famillys',[FamillyController::class, 'index'])->name('famillys');
    Route::post('/admin/package-famillys',[FamillyController::class, 'store'])->name('famillys.store');
    Route::get('/admin/package-famillys/{id}',[FamillyController::class, 'edit'])->name('famillys.edit');
    Route::put('/admin/package-famillys/{id}',[FamillyController::class, 'update'])->name('famillys.update');
    Route::delete('/admin/package-famillys/{id}',[FamillyController::class, 'destroy'])->name('famillys.destroy');

    #transaction prewedding
    #deposit
    Route::get('/admin/Transaction/deposit',[Resevasi_PreController::class, 'index'])->name('index_dp');
    Route::put('Transaction/{id}/Confirmations/dp', [Resevasi_PreController::class,'confirmation_dp'])->name('transaksi.confirmation_dp');
    Route::get('Transaction/{id}/end',[Resevasi_PreController::class,'end_dp'])->name('admin.transaksi.dp_selesai');
    Route::put('Trasaction/{id}',[Resevasi_PreController::class,'reject'])->name('admin.transaksi.reject');
    Route::delete('Trasaction/{id}',[Resevasi_PreController::class,'destroy'])->name('admin.transaksi.delete');
    #Fullpayment
    Route::get('/admin/Transaction/payment',[Resevasi_PreFullController::class, 'index'])->name('index_payment');
    Route::put('Transaction/{id}/Confirmations/payment', [Resevasi_PreFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay');
    Route::get('Transaction/{id}/payment',[Resevasi_PreFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai');
    Route::put('Trasaction/{id}/payment',[Resevasi_PreFullController::class,'reject'])->name('admin.transaksi.reject');
    Route::delete('Trasaction/{id}/payment',[Resevasi_PreFullController::class,'destroy'])->name('admin.transaksi.delete');
    
    
    
});
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    #guide
    Route::get('/prewedding', [HomeController::class, 'prewedding'])->name('prewedding');
    Route::get('/wedding', [HomeController::class, 'wedding'])->name('wedding');
    Route::get('/engagement', [HomeController::class, 'engagement'])->name('engagement');
    Route::get('/aqiqah', [HomeController::class, 'aqiqah'])->name('aqiqah');
    #gradutions
    Route::get('/personal', [HomeController::class, 'personal'])->name('personal');
    Route::get('/group', [HomeController::class, 'group'])->name('group');
    Route::get('/familly', [HomeController::class, 'familly'])->name('familly');

    #reservations_prewedding
    Route::get('/prewedding/{prewedding}',[Prewedding_TransactionController::class, 'reservation'])->name('reservation_prewedding');
    Route::post('/prewedding/store',[Prewedding_TransactionController::class, 'store_pre'])->name('store_prewedding');
    #trasanctions_prewedding
    Route::get('/transaction', [Prewedding_TransactionController::class, 'transactions'])->name('transaction');
    Route::get('/transaction/{id}', [Prewedding_TransactionController::class, 'payment_dp'])->name('transaction_dp');
    Route::put('/transaction/{id}/dp', [Prewedding_TransactionController::class, 'store_dp'])->name('transaction.upload_dp');
    Route::put('/transaction/{id}/pay', [Prewedding_TransactionController::class, 'store_pay'])->name('transaction.upload_pay');
    Route::delete('trasaction/{id}',[Prewedding_TransactionController::class,'destroy'])->name('transaction.destroy');



});

