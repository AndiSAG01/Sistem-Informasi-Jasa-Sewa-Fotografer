<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_aqi;
use Illuminate\Http\Request;

class Resevasi_AqiController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_aqi::all();
        return view('admin.resevasi_aqi.deposit', compact('resevasi'));
    }

    public function confirmation_dp($id)
    {
        Resevasi_aqi::whereId($id)->first()->aqiqah->id;

        Resevasi_aqi::where('id', $id)->update([
            'status_dp' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_aqi dengan ID
        $resevasi = Resevasi_aqi::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'engagement' tersedia
            if ($resevasi->aqiqah) {
                $resevasi->aqiqah->id; // Akses properti 'engagement'
            } else {
                // Jika 'engagement' tidak ada, beri tahu pengguna
                return back()->with('error', 'Engagement data not found');
            }

            // Lanjutkan dengan mengubah status DP
            $resevasi->update([
                'status_dp' => 'selesai'
            ]);

            return back()->with('success', 'Transaction Successfully Added');
        } else {
            // Jika ID tidak ditemukan, beri tahu pengguna
            return back()->with('error', 'Resevasi data not found');
        }
    }

    public function reject($id)
    {
        Resevasi_aqi::where('id', $id)->update([
           'status_dp' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_aqi::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
