<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basic;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personal = Personal::all();
        $basics = Basic::all();
        return view('admin.personal.index',compact('personal','basics'));
    }

    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->basics_id = $request->basics_id;
        $personal->description = $request->description;
        $personal->price = $request->price;
        $personal->save();
        return redirect()->route('personals')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $personal = Personal::find($id);
        $basic = Basic::all();
        return view('admin.personal.edit',compact('personal','basic'));
    }

    public function update(Request $request, $id)
    {
        $personal = Personal::find($id);
        $personal->basics_id = $request->basics_id;
        $personal->description = $request->description;
        $personal->price = $request->price;
        $personal->save();
        return redirect()->route('personals')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->delete();
        return redirect()->route('personals')->with('danger','Delete Successfully');
    }
    
}
