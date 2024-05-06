<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_aqi;
use App\Models\Resevasi_eng;
use App\Models\Resevasi_Fam;
use App\Models\Resevasi_Gro;
use App\Models\Resevasi_Per;
use App\Models\Resevasi_Pre;
use App\Models\Resevasi_wed;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $tables = [
            'resevasi_pres',
            'resevasi_weds',
            'resevasi_engs',
            'resevasi_aqis',
            'resevasi__pers',
            'resevasi__gros',
            'resevasi__fams',
        ];
    
        // Inisialisasi array untuk menyimpan informasi pesanan belum dikonfirmasi
        $unconfirmedOrders = [];
    
        foreach ($tables as $table) {
            try {
                // Mendapatkan jumlah entri dengan status_dp "menunggu konfirmasi"
                $status_dp_count = DB::table($table)
                                     ->where('status_dp', 'menunggu konfirmasi')
                                     ->count();
    
                // Mendapatkan jumlah entri dengan status_pay "menunggu konfirmasi"
                $status_pay_count = DB::table($table)
                                      ->where('status_pay', 'menunggu konfirmasi')
                                      ->count();
    
                // Menyimpan hasil ke array
                $unconfirmedOrders[$table] = [
                    'dp' => $status_dp_count,
                    'pay' => $status_pay_count
                ];
            } catch (Exception $e) {
                // Menangani kesalahan yang mungkin terjadi saat mengakses database
                report($e); // Melaporkan kesalahan, bisa ditindaklanjuti dengan log
                $unconfirmedOrders[$table] = [
                    'dp' => 0,
                    'pay' => 0
                ]; // Set default jika ada kesalahan
            }
        }
    
        // Mengembalikan data ke tampilan
        return view('admin.dashboard', [
            'unconfirmedOrders' => $unconfirmedOrders,
        ]);
    }
    


    public function report()
    {
        return view('admin.report.index');
    }

   public function prewedding()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_Pre::all();
    return view('admin.report.report_prewedding', compact('resevasi','year'));
   }
   public function wedding()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_wed::all();
    return view('admin.report.report_wedding', compact('resevasi','year'));
   }
   public function engagement()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_eng::all();
    return view('admin.report.report_engagement', compact('resevasi','year'));
   }
   public function aqiqah()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_aqi::all();
    return view('admin.report.report_aqiqah', compact('resevasi','year'));
   }
   public function personal()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_Per::all();
    return view('admin.report.report_personal', compact('resevasi','year'));
   }
   public function group()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_Gro::all();
    return view('admin.report.report_group', compact('resevasi','year'));
   }
   public function familly()
   {
    $year = $year = Carbon::now()->format('M-Y');
    $resevasi = Resevasi_Fam::all();
    return view('admin.report.report_familly', compact('resevasi','year'));
   }
}
