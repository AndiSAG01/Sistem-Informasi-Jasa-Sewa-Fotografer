<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Models\Group;
use App\Models\Resevasi_Gro;
use App\Models\User;
use Illuminate\Http\Request;

class Group_TransactionController extends Controller
{
    public function transactions_gro()
    {
       $resevasi = Resevasi_Gro::where('user_id', Auth()->user()->id)->get();

        // Tampilkan transaksi yang sesuai pada view
        return view('user.reservasi_group.transactions_group', compact('resevasi'));
    }


    public function reservation($id)
    {
        $group = Group::findorFail($id);
        $user = User::findorFail($id);
        $basic = Basic::findorFail($id);
        return view('user.reservasi_group.reservation_group', compact('group', 'basic', 'user'));
    }

    public function store_gro(Request $request)
    {
        Resevasi_Gro::create([
            'group_id' => $request->group_id,
            'user_id' => $request->user_id,
            'basic_id' => $request->basic_id,
            'name' => $request->name,
            'date' => $request->date,
            'address' => $request->address,
            'selected' => $request->selected,
            'status_dp' => $request->status_dp,
            'status_pay' => $request->status_pay,
        ]);
        return redirect()->route('transaction_group');
    }

    public function payment_dp($id)
    {
        $resevasi = Resevasi_Gro::find($id);
        if (!$resevasi) {
        }

        $data = $resevasi;
        return view('user.reservasi_group.paymentDP_group', compact('data'));
    }

    public function store_dp(Request $request, $id)
    {
        Resevasi_Gro::whereId($id)->update([
            'image_dp' => $request->file('image_dp')->store('assets/image_dp', 'public'),
            'status_dp' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_group')->with('success', 'Upload Successfully');
    }
    public function store_pay(Request $request, $id)
    {
        Resevasi_Gro::whereId($id)->update([
            'image_pay' => $request->file('image_pay')->store('assets/image_pay', 'public'),
            'status_pay' => 'menunggu konfirmasi'
        ]);

        return redirect()->route('transaction_group')->with('success', 'Upload Successfully');
    }

    public function destroy($id)
    {
        Resevasi_Gro::where('id', $id)->delete();

        return redirect()->back()->with('danger', 'Successfully Deleted');
    }
}
