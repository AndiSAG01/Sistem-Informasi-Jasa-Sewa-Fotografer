<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_Per;
use Illuminate\Http\Request;

class Resevasi_PerFullController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_Per::all();
        return view('admin.resevasi_per.fullpayment', compact('resevasi'));
    }

    public function confirmation_pay($id)
    {
        Resevasi_Per::whereId($id)->first()->personal->id;

        Resevasi_Per::where('id', $id)->update([
            'status_pay' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_Per dengan ID
        $resevasi = Resevasi_Per::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'personal' tersedia
            if ($resevasi->personal) {
                $resevasi->personal->id; // Akses properti 'personal'
            } else {
                // Jika 'personal' tidak ada, beri tahu pengguna
                return back()->with('error', 'Prewedding data not found');
            }

            // Lanjutkan dengan mengubah status DP
            $resevasi->update([
                'status_pay' => 'selesai'
            ]);

            return back()->with('success', 'Transaction Successfully Added');
        } else {
            // Jika ID tidak ditemukan, beri tahu pengguna
            return back()->with('error', 'Resevasi data not found');
        }
    }

    public function reject($id)
    {
        Resevasi_Per::where('id', $id)->update([
           'status_pay' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_Per::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
