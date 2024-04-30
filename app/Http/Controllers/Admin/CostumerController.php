<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function index()
    {
        $user = User::where('isAdmin', 0)->get();
        return view('admin.costumers.index', compact('user'));
    }

    public function detail($id)
    {
        $user = User::find($id);
        return view('admin.costumers.detail', compact('user'));
    }

    public function destroy($id)
    {

        // Delete the car record
        User::where('id', $id)->delete();

        return redirect()->back()->with('danger','Costumers Successfully Deleted');
    }
}
