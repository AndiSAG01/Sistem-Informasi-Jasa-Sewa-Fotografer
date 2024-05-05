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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
