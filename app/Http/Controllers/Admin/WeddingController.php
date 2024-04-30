<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WeddingRequest;
use App\Models\Basic;
use App\Models\Wedding;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index()
    {
        $wedding = Wedding::all();
        $basics = Basic::all();
        return view('admin.wedding.index',compact('wedding','basics'));
    }

    public function store(WeddingRequest $request)
    {
        $wedding = new Wedding();
        $wedding->basics_id = $request['basics_id'];
        $wedding->description = $request['description'];
        $wedding->price = $request['price'];
        $wedding->save();
        return redirect()->route('weddings')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $wedding = Wedding::find($id);
        $basic = Basic::all();
        return view('admin.wedding.edit',compact('wedding','basic'));
    }

    public function update(WeddingRequest $request, $id)
    {
        $wedding = Wedding::find($id);
        $wedding->basics_id = $request->basics_id;
        $wedding->description = $request->description;
        $wedding->price = $request->price;
        $wedding->save();
        return redirect()->route('weddings')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $wedding = Wedding::find($id);
        $wedding->delete();
        return redirect()->route('weddings')->with('danger','Delete Successfully');
    }
    
}
