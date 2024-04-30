<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AqiqahsRequest;
use App\Models\Aqiqah;
use App\Models\Basic;
use Illuminate\Http\Request;

class AqiqahController extends Controller
{
    public function index()
    {
        $aqiqah = Aqiqah::all();
        $basics = Basic::all();
        return view('admin.aqiqah.index',compact('aqiqah','basics'));
    }

    public function store(AqiqahsRequest $request)
    {
        $aqiqah = new Aqiqah();
        $aqiqah->basics_id = $request['basics_id'];
        $aqiqah->description = $request['description'];
        $aqiqah->price = $request['price'];
        $aqiqah->save();
        return redirect()->route('aqiqahs')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $aqiqah = Aqiqah::find($id);
        $basic = Basic::all();
        return view('admin.aqiqah.edit',compact('aqiqah','basic'));
    }

    public function update(AqiqahsRequest $request, $id)
    {
        $aqiqah = Aqiqah::find($id);
        $aqiqah->basics_id = $request->basics_id;
        $aqiqah->description = $request->description;
        $aqiqah->price = $request->price;
        $aqiqah->save();
        return redirect()->route('aqiqahs')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $aqiqah = Aqiqah::find($id);
        $aqiqah->delete();
        return redirect()->route('aqiqahs')->with('danger','Delete Successfully');
    }
    
}
