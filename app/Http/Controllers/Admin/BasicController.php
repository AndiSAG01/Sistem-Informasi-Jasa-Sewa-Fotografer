<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basic;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $basic = Basic::all();
        return view('admin.basic.index', compact('basic'));
    }

    public function store(Request $request)
    {
        $basic = new Basic();
        $basic->name = $request->name;
        $basic->save();
        return redirect()->route('basics')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $basic = Basic::Find($id);
        return view('admin.basic.edit', compact('basic'));
    }

    public function update(Request $request, $id)
    {
        $basic = Basic::Find($id);
        $basic->name = $request->name;
        $basic->save();
        return redirect()->route('basics')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $basic = Basic::Find($id);
        $basic->delete();
        return redirect()->route('basics')->with('danger','Delete Successfully');
    }
}
