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
use App\Http\Controllers\Admin\Transaction\Resevasi_FamController;
use App\Http\Controllers\Admin\Transaction\Resevasi_FamFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_GroController;
use App\Http\Controllers\Admin\Transaction\Resevasi_GroFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PerController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PerFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreController;
use App\Http\Controllers\Admin\Transaction\Resevasi_PreFullController;
use App\Http\Controllers\Admin\Transaction\Resevasi_WedController;
use App\Http\Controllers\Admin\Transaction\Resevasi_WedFullController;
use App\Http\Controllers\Admin\WeddingController;
use App\Http\Controllers\Aqiqah_TransactionController;
use App\Http\Controllers\Engagement_TransactionController;
use App\Http\Controllers\Familly_TransactionController;
use App\Http\Controllers\Group_TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Personal_TransactionController;
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
    Route::get('resevations/check-pending',[DashboardController::class, 'checkPending'])->name('check_pending_reservations');
    #costumers
    Route::get('/admin/costumers',[CostumerController::class, 'index'])->name('costumers');
    Route::get('/admin/costumers/{id}',[CostumerController::class, 'detail'])->name('costumers.detail');
    Route::delete('/admin/costumers/{id}',[CostumerController::class, 'destroy'])->name('costumers.destroy');
    Route::get('/admin/report',[CostumerController::class, 'report'])->name('costumers.report');

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
    Route::put('Transaction/{id}/Confirmations/dp-prewedding', [Resevasi_PreController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_prewedding');
    Route::get('Transaction/{id}/dp-end-prewedding',[Resevasi_PreController::class,'end_dp'])->name('admin.transaksi.dp_selesai_prewedding');
    Route::put('Trasaction/{id}/dp-reject-prewedding',[Resevasi_PreController::class,'reject'])->name('admin.transaksi.dp_reject_prewedding');
    Route::delete('Trasaction/{id}/dp-delete-prewedding',[Resevasi_PreController::class,'destroy'])->name('admin.transaksi.delete_prewedding');
    #Fullpayment
    Route::get('/admin/Transaction/payment-prewedding',[Resevasi_PreFullController::class, 'index'])->name('index_payment_prewedding');
    Route::put('Transaction/{id}/Confirmations/payment-prewedding', [Resevasi_PreFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_prewedding');
    Route::get('Transaction/{id}/pay-end-prewedding',[Resevasi_PreFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_prewedding');
    Route::put('Trasaction/{id}/pay-reject-prewedding',[Resevasi_PreFullController::class,'reject'])->name('admin.transaksi.pay_reject_prewedding');
    Route::delete('Trasaction/{id}/pay-delete-prewedding',[Resevasi_PreFullController::class,'destroy'])->name('admin.transaksi.delete_prewedding');
    
    #transaction wedding
    #deposit
    Route::get('/admin/Transaction/deposit-wedding',[Resevasi_WedController::class, 'index'])->name('index_dp_wedding');
    Route::put('Transaction/{id}/Confirmations/dp-wedding', [Resevasi_WedController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_wedding');
    Route::get('Transaction/{id}/dp-end-wedding',[Resevasi_WedController::class,'end_dp'])->name('admin.transaksi.dp_selesai_wedding');
    Route::put('Trasaction/{id}/dp-reject-wedding',[Resevasi_WedController::class,'reject'])->name('admin.transaksi.dp_reject_wedding');
    Route::delete('Trasaction/{id}/dp-delete-wedding',[Resevasi_WedController::class,'destroy'])->name('admin.transaksi.delete_wedding');
    #Fullpayment
    Route::get('/admin/Transaction/payment-wedding',[Resevasi_WedFullController::class, 'index'])->name('index_payment_wedding');
    Route::put('Transaction/{id}/Confirmations/payment-wedding', [Resevasi_WedFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_wedding');
    Route::get('Transaction/{id}/pay-end-wedding',[Resevasi_WedFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_wedding');
    Route::put('Trasaction/{id}/pay-reject-wedding',[Resevasi_WedFullController::class,'reject'])->name('admin.transaksi.pay_reject_wedding');
    Route::delete('Trasaction/{id}/delete-pay-wedding',[Resevasi_WedFullController::class,'destroy'])->name('admin.transaksi.delete_wedding');
   
    #transaction engagement
    #deposit
    Route::get('/admin/Transaction/deposit-engagement',[Resevasi_EngController::class, 'index'])->name('dp_engagement');
    Route::put('Transaction/{id}/Confirmations/dp-engagement', [Resevasi_EngController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_engagement');
    Route::get('Transaction/{id}/dp-end-engagement',[Resevasi_EngController::class,'end_dp'])->name('admin.transaksi.dp_selesai_engagement');
    Route::put('Trasaction/{id}/dp-reject-engagement',[Resevasi_EngController::class,'reject'])->name('admin.transaksi.dp_reject_engagement');
    Route::delete('Trasaction/{id}/dp-delete-engagement',[Resevasi_EngController::class,'destroy'])->name('admin.transaksi.delete_engagement');;
    #Fullpayment
    Route::get('/admin/Transaction/payment-engagement',[Resevasi_EngFullController::class, 'index'])->name('payment_engagement');
    Route::put('Transaction/{id}/Confirmations/payment-engagement', [Resevasi_EngFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_engagement');
    Route::get('Transaction/{id}/payment-end-engagement',[Resevasi_EngFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_engagement');
    Route::put('Trasaction/{id}/pay-reject-engagement',[Resevasi_EngFullController::class,'reject'])->name('admin.transaksi.pay_reject_engagement');
    Route::delete('Trasaction/{id}/delete-pay-engagement',[Resevasi_EngFullController::class,'destroy'])->name('admin.transaksi.delete_engagement');
    
    #transaction Aqiqah
    #deposit
    Route::get('/admin/Transaction/deposit-aqiqah',[Resevasi_AqiController::class, 'index'])->name('dp_aqiqah');
    Route::put('Transaction/{id}/Confirmations/dp-aqiqah', [Resevasi_AqiController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_aqiqah');
    Route::get('Transaction/{id}/dp-end-aqiqah',[Resevasi_AqiController::class,'end_dp'])->name('admin.transaksi.dp_selesai_aqiqah');
    Route::put('Trasaction/{id}/dp-reject-aqiqah',[Resevasi_AqiController::class,'reject'])->name('admin.transaksi.dp_reject_aqiqah');
    Route::delete('Trasaction/{id}/delete-dp-aqiqah',[Resevasi_AqiController::class,'destroy'])->name('admin.transaksi.delete_aqiqah');
    #Fullpayment
    Route::get('/admin/Transaction/payment-aqiqah',[Resevasi_AqiFullController::class, 'index'])->name('payment_aqiqah');
    Route::put('Transaction/{id}/Confirmations/payment-aqiqah', [Resevasi_AqiFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_aqiqah');
    Route::get('Transaction/{id}/pay-end-aqiqah',[Resevasi_AqiFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_aqiqah');
    Route::put('Trasaction/{id}/pay-reject-aqiqah',[Resevasi_AqiFullController::class,'reject'])->name('admin.transaksi.pay_reject_aqiqah');
    Route::delete('Trasaction/{id}/pay-delete-aqiqah',[Resevasi_AqiFullController::class,'destroy'])->name('admin.transaksi.delete_aqiqah');
   
    #transaction personal
    #deposit
    Route::get('/admin/Transaction/deposit-personal',[Resevasi_PerController::class, 'index'])->name('dp_personal');
    Route::put('Transaction/{id}/Confirmations/dp-personal', [Resevasi_PerController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_personal');
    Route::get('Transaction/{id}/dp-end-personal',[Resevasi_PerController::class,'end_dp'])->name('admin.transaksi.dp_selesai_personal');
    Route::put('Trasaction/{id}/dp-reject-personal',[Resevasi_PerController::class,'reject'])->name('admin.transaksi.dp_reject_personal');
    Route::delete('Trasaction/{id}/dp-delete-personal',[Resevasi_PerController::class,'destroy'])->name('admin.transaksi.delete_personal');
    #Fullpayment
    Route::get('/admin/Transaction/payment-personal',[Resevasi_PerFullController::class, 'index'])->name('payment_personal');
    Route::put('Transaction/{id}/Confirmations/payment-personal', [Resevasi_PerFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_personal');
    Route::get('Transaction/{id}/pay-end-personal',[Resevasi_PerFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_personal');
    Route::put('Trasaction/{id}/pay-reject-personal',[Resevasi_PerFullController::class,'reject'])->name('admin.transaksi.pay_reject_personal');
    Route::delete('Trasaction/{id}/pay-delete-personal',[Resevasi_PerFullController::class,'destroy'])->name('admin.transaksi.delete_personal');
    
    #transaction group
    #deposit
    Route::get('/admin/Transaction/deposit-group',[Resevasi_GroController::class, 'index'])->name('dp_group');
    Route::put('Transaction/{id}/Confirmations/dp-group', [Resevasi_GroController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_group');
    Route::get('Transaction/{id}/dp-end-group',[Resevasi_GroController::class,'end_dp'])->name('admin.transaksi.dp_selesai_group');
    Route::put('Trasaction/{id}/dp-reject-group',[Resevasi_GroController::class,'reject'])->name('admin.transaksi.dp_reject_group');
    Route::delete('Trasaction/{id}/dp-delete-group',[Resevasi_GroController::class,'destroy'])->name('admin.transaksi.delete_group');
    #Fullpayment
    Route::get('/admin/Transaction/payment-group',[Resevasi_GroFullController::class, 'index'])->name('payment_group');
    Route::put('Transaction/{id}/Confirmations/payment-group', [Resevasi_GroFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_group');
    Route::get('Transaction/{id}/pay-end-group',[Resevasi_GroFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_group');
    Route::put('Trasaction/{id}/pay-reject-group',[Resevasi_GroFullController::class,'reject'])->name('admin.transaksi.pay_reject_group');
    Route::delete('Trasaction/{id}/pay-delete-group',[Resevasi_GroFullController::class,'destroy'])->name('admin.transaksi.delete_group');
    
    #transaction familly
    #deposit
    Route::get('/admin/Transaction/deposit-familly',[Resevasi_FamController::class, 'index'])->name('dp_familly');
    Route::put('Transaction/{id}/Confirmations/dp-familly', [Resevasi_FamController::class,'confirmation_dp'])->name('transaksi.confirmation_dp_familly');
    Route::get('Transaction/{id}/end-dp-familly',[Resevasi_FamController::class,'end_dp'])->name('admin.transaksi.dp_selesai_familly');
    Route::put('Trasaction/{id}/dp-reject-familly',[Resevasi_FamController::class,'reject'])->name('admin.transaksi.dp_reject_familly');
    Route::delete('Trasaction/{id}/dp-delete-familly',[Resevasi_FamController::class,'destroy'])->name('admin.transaksi.delete_familly');
    #Fullpayment
    Route::get('/admin/Transaction/payment-familly',[Resevasi_FamFullController::class, 'index'])->name('payment_familly');
    Route::put('Transaction/{id}/Confirmations/payment-familly', [Resevasi_FamFullController::class,'confirmation_pay'])->name('transaksi.confirmation_pay_familly');
    Route::get('Transaction/{id}/pay-end-familly',[Resevasi_FamFullController::class,'end_dp'])->name('admin.transaksi.pay_selesai_familly');
    Route::put('Trasaction/{id}/pay-reject-familly',[Resevasi_FamFullController::class,'reject'])->name('admin.transaksi.pay_reject_familly');
    Route::delete('Trasaction/{id}/pay-delete-familly',[Resevasi_FamFullController::class,'destroy'])->name('admin.transaksi.delete_familly');
    #search transaction
    Route::get('Trasaction/search',[DashboardController::class, 'report'])->name('laporan');
    Route::get('Trasaction/Report-Prewedding',[DashboardController::class,'prewedding'])->name('report.prewedding');
    Route::get('Trasaction/Report-wedding',[DashboardController::class,'wedding'])->name('report.wedding');
    Route::get('Trasaction/Report-Engagement',[DashboardController::class,'engagement'])->name('report.engagement');
    Route::get('Trasaction/Report-Aqiqah',[DashboardController::class,'aqiqah'])->name('report.aqiqah');
    Route::get('Trasaction/Report-Personal',[DashboardController::class,'personal'])->name('report.personal');
    Route::get('Trasaction/Report-Group',[DashboardController::class,'group'])->name('report.group');
    Route::get('Trasaction/Report-Familly',[DashboardController::class,'familly'])->name('report.familly');
});

#COSTUMER
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
    Route::get('/transaction/{id}/prewedding', [Prewedding_TransactionController::class, 'payment_dp'])->name('transaction_dp_pre');
    Route::put('/transaction/{id}/dp-prewedding', [Prewedding_TransactionController::class, 'store_dp'])->name('transaction.upload_dp');
    Route::put('/transaction/{id}/pay-prewedding', [Prewedding_TransactionController::class, 'store_pay'])->name('transaction.upload_pay');
    Route::delete('trasaction/{id}/delete',[Prewedding_TransactionController::class,'destroy'])->name('transaction.destroy');

    #reservations_wedding
    Route::get('/wedding/{wedding}',[Wedding_TransactionController::class, 'reservation'])->name('reservation_wedding');
    Route::post('/wedding/store',[Wedding_TransactionController::class, 'store_wed'])->name('store_wedding');
    #trasanctions_wedding
    Route::get('/transaction-wedding', [Wedding_TransactionController::class, 'transactions_wed'])->name('transaction_wedding');
    Route::get('/transaction/{id}/wedding', [Wedding_TransactionController::class, 'payment_dp'])->name('transaction_dp_wed');
    Route::put('/transaction/{id}/dp-wedding', [Wedding_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_wed');
    Route::put('/transaction/{id}/pay-wedding', [Wedding_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_wed');
    Route::delete('trasaction/{id}/delete',[Wedding_TransactionController::class,'destroy'])->name('transaction.destroy');
    
    #reservations_engagement
    Route::get('/engagement/{engagement}',[Engagement_TransactionController::class, 'reservation'])->name('reservation_engagement');
    Route::post('/engagement/store',[Engagement_TransactionController::class, 'store_eng'])->name('store_engagement');
    #trasanctions_engagement
    Route::get('/transaction-engagement', [Engagement_TransactionController::class, 'transactions_eng'])->name('transaction_engagement');
    Route::get('/transaction/{id}/engagement', [Engagement_TransactionController::class, 'payment_dp'])->name('transaction_dp_eng');
    Route::put('/transaction/{id}/dp-engagement', [Engagement_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_eng');
    Route::put('/transaction/{id}/pay-engagement', [Engagement_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_eng');
    Route::delete('trasaction/{id}/delete',[Engagement_TransactionController::class,'destroy'])->name('transaction.destroy');
   
    #reservations_aqiqah
    Route::get('/aqiqah/{aqiqah}',[Aqiqah_TransactionController::class, 'reservation'])->name('reservation_aqiqah');
    Route::post('/aqiqah/store',[Aqiqah_TransactionController::class, 'store_aqi'])->name('store_aqiqah');
    #trasanctions_aqiqah
    Route::get('/transaction-aqiqah', [Aqiqah_TransactionController::class, 'transactions_aqi'])->name('transaction_aqiqah');
    Route::get('/transaction/{id}/aqiqah', [Aqiqah_TransactionController::class, 'payment_dp'])->name('transaction_dp_aqi');
    Route::put('/transaction/{id}/dp-aqiqah', [Aqiqah_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_aqi');
    Route::put('/transaction/{id}/pay-aqiqah', [Aqiqah_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_aqi');
    Route::delete('trasaction/{id}',[Aqiqah_TransactionController::class,'destroy'])->name('transaction.destroy');
   
    #reservations_personal
    Route::get('/personal/{personal}',[Personal_TransactionController::class, 'reservation'])->name('reservation_personal');
    Route::post('/personal/store',[Personal_TransactionController::class, 'store_per'])->name('store_personal');
    #trasanctions_personal
    Route::get('/transaction-personal', [Personal_TransactionController::class, 'transactions_per'])->name('transaction_personal');
    Route::get('/transaction/{id}/personal', [Personal_TransactionController::class, 'payment_dp'])->name('transaction_dp_per');
    Route::put('/transaction/{id}/dp-personal', [Personal_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_per');
    Route::put('/transaction/{id}/pay-personal', [Personal_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_per');
    Route::delete('trasaction/{id}',[Personal_TransactionController::class,'destroy'])->name('transaction.destroy');
    
    #reservations_group
    Route::get('/group/{group}',[Group_TransactionController::class, 'reservation'])->name('reservation_group');
    Route::post('/group/store',[Group_TransactionController::class, 'store_gro'])->name('store_group');
    #trasanctions_group
    Route::get('/transaction-group', [Group_TransactionController::class, 'transactions_gro'])->name('transaction_group');
    Route::get('/transaction/{id}/group', [Group_TransactionController::class, 'payment_dp'])->name('transaction_dp_gro');
    Route::put('/transaction/{id}/dp-group', [Group_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_gro');
    Route::put('/transaction/{id}/pay-group', [Group_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_gro');
    Route::delete('trasaction/{id}',[Group_TransactionController::class,'destroy'])->name('transaction.destroy');
    
    #reservations_familly
    Route::get('/familly/{familly}',[Familly_TransactionController::class, 'reservation'])->name('reservation_familly');
    Route::post('/familly/store',[Familly_TransactionController::class, 'store_fam'])->name('store_familly');
    #trasanctions_familly
    Route::get('/transaction-familly', [Familly_TransactionController::class, 'transactions_fam'])->name('transaction_familly');
    Route::get('/transaction/{id}/familly', [Familly_TransactionController::class, 'payment_dp'])->name('transaction_dp_fam');
    Route::put('/transaction/{id}/dp-familly', [Familly_TransactionController::class, 'store_dp'])->name('transaction.upload_dp_fam');
    Route::put('/transaction/{id}/pay-familly', [Familly_TransactionController::class, 'store_pay'])->name('transaction.upload_pay_fam');
    Route::delete('trasaction/{id}',[Familly_TransactionController::class,'destroy'])->name('transaction.destroy');



});

