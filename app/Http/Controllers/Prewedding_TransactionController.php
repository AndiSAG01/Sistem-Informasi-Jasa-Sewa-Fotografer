<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\PreWedding;
use App\Models\Resevasi_Pre;
use App\Models\User;
use App\Rules\UniqueReservationDate;
use Illuminate\Http\Request;

class Prewedding_TransactionController extends Controller
{
    
    public function transactions()
    {
       $resevasi = Resevasi_Pre::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_prewedding.transactions_prewedding', compact('resevasi'));
    }


    public function reservation($id)
    {
        $prewedding = PreWedding::findorFail($id);
        return view('user.reservasi_prewedding.reservation_prewedding', compact('prewedding'));
    }

    public function store_pre(Request $request)
    {
        $request->validate([
            'date' => ['required', new UniqueReservationDate],
        ]);
        Resevasi_Pre::create([
            'prewedding_id' => $request->prewedding_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => null,
            'status_pay' => null,
        ]);
        return redirect()->route('transaction_prewedding');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_Pre::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_prewedding.paymentDP_prewedding', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_Pre::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_prewedding')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_Pre::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_prewedding')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_Pre::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
