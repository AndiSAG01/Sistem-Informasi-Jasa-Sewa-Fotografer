<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Resevasi_wed;
use App\Models\User;
use App\Models\Wedding;
use Illuminate\Http\Request;

class Wedding_TransactionController extends Controller
{
    public function transactions_wed()
    {
       $resevasi = Resevasi_wed::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_wedding.transactions_wedding', compact('resevasi'));
    }


    public function reservation($id)
    {
        $wedding = Wedding::findorFail($id);
        return view('user.reservasi_wedding.reservation_wedding', compact('wedding'));
    }

    public function store_wed(Request $request)
    {
        Resevasi_wed::create([
            'wedding_id' => $request->wedding_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_wedding');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_wed::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_wedding.paymentDP_wedding', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_wed::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_wedding')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_wed::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_wedding')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_wed::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
