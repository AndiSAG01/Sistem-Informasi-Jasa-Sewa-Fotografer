<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FamillyRequest;
use App\Models\Basic;
use App\Models\Familly;
use Illuminate\Http\Request;

class FamillyController extends Controller
{
    public function index()
    {
        $familly = Familly::all();
        $basics = Basic::all();
        return view('admin.familly.index',compact('familly','basics'));
    }

    public function store(FamillyRequest $request)
    {
        $familly = new Familly();
        $familly->basics_id = $request->basics_id;
        $familly->description = $request->description;
        $familly->price = $request->price;
        $familly->save();
        return redirect()->route('famillys')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $familly = Familly::find($id);
        $basic = Basic::all();
        return view('admin.familly.edit',compact('familly','basic'));
    }

    public function update(FamillyRequest $request, $id)
    {
        $familly = Familly::find($id);
        $familly->basics_id = $request->basics_id;
        $familly->description = $request->description;
        $familly->price = $request->price;
        $familly->save();
        return redirect()->route('famillys')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $familly = Familly::find($id);
        $familly->delete();
        return redirect()->route('famillys')->with('danger','Delete Successfully');
    }
    
}
