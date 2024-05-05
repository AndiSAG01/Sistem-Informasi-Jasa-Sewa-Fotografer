<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Resevasi_Gro;
use Illuminate\Http\Request;

class Resevasi_GroFullController extends Controller
{
    public function index()
    {
        $resevasi = Resevasi_Gro::all();
        return view('admin.resevasi_gro.fullpayment', compact('resevasi'));
    }

    public function confirmation_pay($id)
    {
        Resevasi_Gro::whereId($id)->first()->group->id;

        Resevasi_Gro::where('id', $id)->update([
            'status_pay' => 'telah di sewa'
        ]);

        return redirect()->back()->with('success', 'Successfully Confirmation');
    }

    public function end_dp($id)
    {
        // Coba temukan Resevasi_Gro dengan ID
        $resevasi = Resevasi_Gro::find($id);

        // Jika objek ditemukan
        if ($resevasi) {
            // Pastikan properti 'group' tersedia
            if ($resevasi->group) {
                $resevasi->group->id; // Akses properti 'group'
            } else {
                // Jika 'group' tidak ada, beri tahu pengguna
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
        Resevasi_Gro::where('id', $id)->update([
           'status_pay' => 'sewa anda di tolak'
        ]);

        return redirect()->back()->with('success', 'Successfully Rejected');
    }

    public function destroy($id)
    {
        Resevasi_Gro::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
