<?php

namespace App\Http\Controllers;

use App\Models\Aqiqah;
use App\Models\Basic;
use App\Models\Resevasi_aqi;
use App\Models\User;
use Illuminate\Http\Request;

class Aqiqah_TransactionController extends Controller
{
    public function transactions_aqi()
    {
       $resevasi = Resevasi_aqi::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_aqiqah.transactions_aqiqah', compact('resevasi'));
    }


    public function reservation($id)
    {
        $aqiqah = Aqiqah::findorFail($id);
        return view('user.reservasi_aqiqah.reservation_aqiqah', compact('aqiqah'));
    }

    public function store_aqi(Request $request)
    {
        Resevasi_aqi::create([
            'aqiqah_id' => $request->aqiqah_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_aqiqah');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_aqi::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_aqiqah.paymentDP_aqiqah', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_aqi::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_aqiqah')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_aqi::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_aqiqah')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_aqi::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
