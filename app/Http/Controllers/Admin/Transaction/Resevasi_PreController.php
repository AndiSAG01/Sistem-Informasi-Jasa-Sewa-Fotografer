<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_Pre;
use Illuminate\Http\Request;

class Resevasi_PreController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_Pre::all();
        return view('admin.resevasi_pre.deposit', compact('resevasi'));
    }

    public function confirmation_dp($id)
    {
        Resevasi_Pre::whereId($id)->first()->prewedding->id;

        Resevasi_Pre::where('id', $id)->update([
            'status_dp' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_Pre dengan ID
        $resevasi = Resevasi_Pre::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'prewedding' tersedia
            if ($resevasi->prewedding) {
                $resevasi->prewedding->id; // Akses properti 'prewedding'
            } else {
                // Jika 'prewedding' tidak ada, beri tahu pengguna
                return back()->with('error', 'Prewedding data not found');
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
        Resevasi_Pre::where('id', $id)->update([
           'status_dp' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_Pre::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
