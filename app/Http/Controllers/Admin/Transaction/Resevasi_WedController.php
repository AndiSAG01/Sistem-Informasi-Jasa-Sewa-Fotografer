<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_wed;
use Illuminate\Http\Request;

class Resevasi_WedController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_wed::all();
        return view('admin.resevasi_wed.deposit', compact('resevasi'));
    }

    public function confirmation_dp($id)
    {
        Resevasi_wed::whereId($id)->first()->wedding->id;

        Resevasi_wed::where('id', $id)->update([
            'status_dp' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_wed dengan ID
        $resevasi = Resevasi_wed::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'wedding' tersedia
            if ($resevasi->wedding) {
                $resevasi->wedding->id; // Akses properti 'prewedding'
            } else {
                // Jika 'prewedding' tidak ada, beri tahu pengguna
                return back()->with('error', 'Wedding data not found');
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
        Resevasi_wed::where('id', $id)->update([
           'status_dp' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_wed::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
