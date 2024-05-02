<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Personal;
use App\Models\Resevasi_Per;
use App\Models\User;
use Illuminate\Http\Request;

class Personal_TransactionController extends Controller
{
    public function transactions_per()
    {
       $resevasi = Resevasi_Per::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_personal.transactions_personal', compact('resevasi'));
    }


    public function reservation($id)
    {
        $personal = Personal::findorFail($id);
        $user = User::findorFail($id);
        $basic = Basic::findorFail($id);
        return view('user.reservasi_personal.reservation_personal', compact('personal', 'basic', 'user'));
    }

    public function store_per(Request $request)
    {
        Resevasi_Per::create([
            'personal_id' => $request->personal_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_personal');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_Per::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_personal.paymentDP_personal', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_Per::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_personal')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_Per::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_personal')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_Per::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
