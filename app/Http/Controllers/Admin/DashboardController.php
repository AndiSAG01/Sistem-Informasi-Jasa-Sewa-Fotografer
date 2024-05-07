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
        #prewedding
        $confir_dp_pre = DB::table('resevasi_pres')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_pre = DB::table('resevasi_pres')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #wedding
            $confir_dp_wed = DB::table('resevasi_weds')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_wed = DB::table('resevasi_weds')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #engagement
            $confir_dp_eng = DB::table('resevasi_engs')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_eng = DB::table('resevasi_engs')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #aqiqah
            $confir_dp_aqi = DB::table('resevasi_aqis')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_aqi = DB::table('resevasi_aqis')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #personal
            $confir_dp_per = DB::table('resevasi__pers')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_per = DB::table('resevasi__pers')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #group
            $confir_dp_gro = DB::table('resevasi__gros')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_gro = DB::table('resevasi__gros')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();
        #familly
            $confir_dp_fam = DB::table('resevasi__fams')
            ->where('status_dp', 'menunggu konfirmasi')
            ->count();
        $confir_pay_fam = DB::table('resevasi__fams')
            ->where('status_pay', 'menunggu konfirmasi')
            ->count();

        return view('admin.dashboard', 
        compact(
        'confir_dp_pre', 
        'confir_pay_pre',
        'confir_dp_wed', 
        'confir_pay_wed',
        'confir_dp_eng', 
        'confir_pay_eng',
        'confir_dp_aqi', 
        'confir_pay_aqi',
        'confir_dp_per', 
        'confir_pay_per',
        'confir_dp_gro', 
        'confir_pay_gro',
        'confir_dp_fam', 
        'confir_pay_fam',
    ));
    }



    public function report()
    {
        return view('admin.report.index');
    }

    public function prewedding()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_Pre::all();
        return view('admin.report.report_prewedding', compact('resevasi', 'year'));
    }
    public function wedding()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_wed::all();
        return view('admin.report.report_wedding', compact('resevasi', 'year'));
    }
    public function engagement()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_eng::all();
        return view('admin.report.report_engagement', compact('resevasi', 'year'));
    }
    public function aqiqah()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_aqi::all();
        return view('admin.report.report_aqiqah', compact('resevasi', 'year'));
    }
    public function personal()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_Per::all();
        return view('admin.report.report_personal', compact('resevasi', 'year'));
    }
    public function group()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_Gro::all();
        return view('admin.report.report_group', compact('resevasi', 'year'));
    }
    public function familly()
    {
        $year = $year = Carbon::now()->format('M-Y');
        $resevasi = Resevasi_Fam::all();
        return view('admin.report.report_familly', compact('resevasi', 'year'));
    }
}
