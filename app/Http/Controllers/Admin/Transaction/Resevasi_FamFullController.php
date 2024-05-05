<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_Fam;
use Illuminate\Http\Request;

class Resevasi_FamFullController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_Fam::all();
        return view('admin.resevasi_fam.fullpayment', compact('resevasi'));
    }

    public function confirmation_pay($id)
    {
        Resevasi_Fam::whereId($id)->first()->familly->id;

        Resevasi_Fam::where('id', $id)->update([
            'status_pay' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_Fam dengan ID
        $resevasi = Resevasi_Fam::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'familly' tersedia
            if ($resevasi->familly) {
                $resevasi->familly->id; // Akses properti 'familly'
            } else {
                // Jika 'familly' tidak ada, beri tahu pengguna
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
        Resevasi_Fam::where('id', $id)->update([
           'status_pay' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_Fam::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
