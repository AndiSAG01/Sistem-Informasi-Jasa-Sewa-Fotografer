<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Familly;
use App\Models\Resevasi_Fam;
use App\Models\User;
use Illuminate\Http\Request;

class Familly_TransactionController extends Controller
{
    public function transactions_fam()
    {
       $resevasi = Resevasi_Fam::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_familly.transactions_familly', compact('resevasi'));
    }


    public function reservation($id)
    {
        $familly = Familly::findorFail($id);
        $user = User::findorFail($id);
        $basic = Basic::findorFail($id);
        return view('user.reservasi_familly.reservation_familly', compact('familly', 'basic', 'user'));
    }

    public function store_fam(Request $request)
    {
        Resevasi_Fam::create([
            'familly_id' => $request->familly_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_familly');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_Fam::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_familly.paymentDP_familly', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_Fam::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_familly')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_Fam::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_familly')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_Fam::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
