<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Engagement;
use App\Models\Resevasi_eng;
use App\Models\User;
use Illuminate\Http\Request;

class Engagement_TransactionController extends Controller
{
    public function transactions_eng()
    {
       $resevasi = Resevasi_eng::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_engagement.transactions_engagement', compact('resevasi'));
    }


    public function reservation($id)
    {
        $engagement = Engagement::findorFail($id);
        $user = User::findorFail($id);
        $basic = Basic::findorFail($id);
        return view('user.reservasi_engagement.reservation_engagement', compact('engagement', 'basic', 'user'));
    }

    public function store_eng(Request $request)
    {
        Resevasi_eng::create([
            'engagement_id' => $request->engagement_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_engagement');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_eng::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_engagement.paymentDP_engagement', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_eng::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_engagement')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_eng::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_engagement')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_eng::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
