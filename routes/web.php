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
use App\Http\Controllers\Admin\Transaction\Resevasi_AqiController;
use App\Http\Controllers\Admin\Transaction\Resevasi_AqiFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_EngController;
use App\Http\Controllers\Admin\Transaction\Resevasi_EngFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_WedController;
use App\Http\Controllers\Admin\Transaction\Resevasi_WedFullController;
use App\Http\Controllers\Admin\WeddingController;
use App\Http\Controllers\Aqiqah_TransactionController;
use App\Http\Controllers\Engagement_TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Prewedding_TransactionController;
use App\Http\Controllers\Wedding_TransactionController;
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

Auth::routes();
Route::post('/logout', [HomeController::class,'logout'])->name('logout');
Route::middleware(['auth','is_admin'])->group(function(){
    Route::get('/admin',[DashboardController::class, 'index'])->name('dashboard');

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
    Route::get('/admin/Transaction/deposit-prewedding',[Resevasi_PreController::class, 'index'])->name('index_dp_prewedding');
    Route::put('Transaction/{id}/Confirmations/dp', [Resevasi_PreController::class,'confirmation_dp'])->name('transaksi.confirmation_dp');
    Route::get('Transaction/{id}/end',[Resevasi_PreController::class,'end_dp'])->name('admin.transaksi.dp_selesai');
    Route::put('Trasaction/{id}',[Resevasi_PreController::class,'reject'])->name('admin.transaksi.dp_reject');
    Route::delete('Trasaction/{id}',[Resevasi_PreController::class,'destroy'])->name('admin.transaksi.delete');
    #Fullpayment
    Route::get('/admin/Transaction/payment-prewedding',[Resevasi_PreFullController::class, 'index'])->name('index_payment_prewedding');
    Route::put('Transaction/{id}/Confirmations/payment', [Resevasi_PreFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay');
    Route::get('Transaction/{id}/payment',[Resevasi_PreFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai');
    Route::put('Trasaction/{id}/payment',[Resevasi_PreFullController::class,'reject'])->name('admin.transaksi.pay_reject');
    Route::delete('Trasaction/{id}/payment',[Resevasi_PreFullController::class,'destroy'])->name('admin.transaksi.delete');
    
    #transaction wedding
    #deposit
    Route::get('/admin/Transaction/deposit-wedding',[Resevasi_WedController::class, 'index'])->name('index_dp_wedding');
    Route::put('Transaction/{id}/Confirmations/dp', [Resevasi_WedController::class,'confirmation_dp'])->name('transaksi.confirmation_dp');
    Route::get('Transaction/{id}/end',[Resevasi_WedController::class,'end_dp'])->name('admin.transaksi.dp_selesai');
    Route::put('Trasaction/{id}',[Resevasi_WedController::class,'reject'])->name('admin.transaksi.dp_reject');
    Route::delete('Trasaction/{id}',[Resevasi_WedController::class,'destroy'])->name('admin.transaksi.delete');
    #Fullpayment
    Route::get('/admin/Transaction/payment-wedding',[Resevasi_WedFullController::class, 'index'])->name('index_payment_wedding');
    Route::put('Transaction/{id}/Confirmations/payment', [Resevasi_WedFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay');
    Route::get('Transaction/{id}/payment',[Resevasi_WedFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai');
    Route::put('Trasaction/{id}/payment',[Resevasi_WedFullController::class,'reject'])->name('admin.transaksi.pay_reject');
    Route::delete('Trasaction/{id}/payment',[Resevasi_WedFullController::class,'destroy'])->name('admin.transaksi.delete');
   
    #transaction engagement
    #deposit
    Route::get('/admin/Transaction/deposit-engagement',[Resevasi_EngController::class, 'index'])->name('dp_engagement');
    Route::put('Transaction/{id}/Confirmations/dp', [Resevasi_EngController::class,'confirmation_dp'])->name('transaksi.confirmation_dp');
    Route::get('Transaction/{id}/end',[Resevasi_EngController::class,'end_dp'])->name('admin.transaksi.dp_selesai');
    Route::put('Trasaction/{id}',[Resevasi_EngController::class,'reject'])->name('admin.transaksi.dp_reject');
    Route::delete('Trasaction/{id}',[Resevasi_EngController::class,'destroy'])->name('admin.transaksi.delete');
    #Fullpayment
    Route::get('/admin/Transaction/payment-engagement',[Resevasi_EngFullController::class, 'index'])->name('payment_engagement');
    Route::put('Transaction/{id}/Confirmations/payment', [Resevasi_EngFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay');
    Route::get('Transaction/{id}/payment',[Resevasi_EngFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai');
    Route::put('Trasaction/{id}/payment',[Resevasi_EngFullController::class,'reject'])->name('admin.transaksi.pay_reject');
    Route::delete('Trasaction/{id}/payment',[Resevasi_EngFullController::class,'destroy'])->name('admin.transaksi.delete');
    
    #transaction Aqiqah
    #deposit
    Route::get('/admin/Transaction/deposit-aqiqah',[Resevasi_AqiController::class, 'index'])->name('dp_aqiqah');
    Route::put('Transaction/{id}/Confirmations/dp', [Resevasi_AqiController::class,'confirmation_dp'])->name('transaksi.confirmation_dp');
    Route::get('Transaction/{id}/end',[Resevasi_AqiController::class,'end_dp'])->name('admin.transaksi.dp_selesai');
    Route::put('Trasaction/{id}',[Resevasi_AqiController::class,'reject'])->name('admin.transaksi.dp_reject');
    Route::delete('Trasaction/{id}',[Resevasi_AqiController::class,'destroy'])->name('admin.transaksi.delete');
    #Fullpayment
    Route::get('/admin/Transaction/payment-aqiqah',[Resevasi_AqiFullController::class, 'index'])->name('payment_aqiqah');
    Route::put('Transaction/{id}/Confirmations/payment', [Resevasi_AqiFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay');
    Route::get('Transaction/{id}/payment',[Resevasi_AqiFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai');
    Route::put('Trasaction/{id}/payment',[Resevasi_AqiFullController::class,'reject'])->name('admin.transaksi.pay_reject');
    Route::delete('Trasaction/{id}/payment',[Resevasi_AqiFullController::class,'destroy'])->name('admin.transaksi.delete');
    
    
});
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
    Route::get('/transaction-prewedding', [Prewedding_TransactionController::class, 'transactions'])->name('transaction_prewedding');
    Route::get('/transaction/{id}', [Prewedding_TransactionController::class, 'payment_dp'])->name('transaction_dp');
    Route::put('/transaction/{id}/dp', [Prewedding_TransactionController::class, 'store_dp'])->name('transaction.upload_dp');
    Route::put('/transaction/{id}/pay', [Prewedding_TransactionController::class, 'store_pay'])->name('transaction.upload_pay');
    Route::delete('trasaction/{id}',[Prewedding_TransactionController::class,'destroy'])->name('transaction.destroy');

    #reservations_wedding
    Route::get('/wedding/{wedding}',[Wedding_TransactionController::class, 'reservation'])->name('reservation_wedding');
    Route::post('/wedding/store',[Wedding_TransactionController::class, 'store_wed'])->name('store_wedding');
    #trasanctions_wedding
    Route::get('/transaction-wedding', [Wedding_TransactionController::class, 'transactions_wed'])->name('transaction_wedding');
    Route::get('/transaction/{id}', [Wedding_TransactionController::class, 'payment_dp'])->name('transaction_dp');
    Route::put('/transaction/{id}/dp', [Wedding_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_wed');
    Route::put('/transaction/{id}/pay', [Wedding_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_wed');
    Route::delete('trasaction/{id}',[Wedding_TransactionController::class,'destroy'])->name('transaction.destroy');
    
    #reservations_engagement
    Route::get('/engagement/{engagement}',[Engagement_TransactionController::class, 'reservation'])->name('reservation_engagement');
    Route::post('/engagement/store',[Engagement_TransactionController::class, 'store_eng'])->name('store_engagement');
    #trasanctions_engagement
    Route::get('/transaction-engagement', [Engagement_TransactionController::class, 'transactions_eng'])->name('transaction_engagement');
    Route::get('/transaction/{id}', [Engagement_TransactionController::class, 'payment_dp'])->name('transaction_dp');
    Route::put('/transaction/{id}/dp', [Engagement_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_eng');
    Route::put('/transaction/{id}/pay', [Engagement_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_eng');
    Route::delete('trasaction/{id}',[Engagement_TransactionController::class,'destroy'])->name('transaction.destroy');
   
    #reservations_aqiqah
    Route::get('/aqiqah/{aqiqah}',[Aqiqah_TransactionController::class, 'reservation'])->name('reservation_aqiqah');
    Route::post('/aqiqah/store',[Aqiqah_TransactionController::class, 'store_aqi'])->name('store_aqiqah');
    #trasanctions_aqiqah
    Route::get('/transaction-aqiqah', [Aqiqah_TransactionController::class, 'transactions_aqi'])->name('transaction_aqiqah');
    Route::get('/transaction/{id}', [Aqiqah_TransactionController::class, 'payment_dp'])->name('transaction_dp');
    Route::put('/transaction/{id}/dp', [Aqiqah_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_aqi');
    Route::put('/transaction/{id}/pay', [Aqiqah_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_aqi');
    Route::delete('trasaction/{id}',[Aqiqah_TransactionController::class,'destroy'])->name('transaction.destroy');



});

