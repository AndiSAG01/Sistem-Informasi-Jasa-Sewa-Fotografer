<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        $user = User::where('is_admin', 0)->get();
        return view('admin.costumers.index', compact('user'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('admin.costumers.detail', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('danger','Costumers Successfully Deleted');
    }

    public function report()
    {
        $user = User::where('is_admin', 0)->get();
        $year = Carbon::now()->format(' M Y');
        return view('admin.costumers.report', compact('user','year'));
    }
}
