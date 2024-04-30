<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EngagementRequest;
use App\Models\Basic;
use App\Models\Engagement;
use Illuminate\Http\Request;

class EngagementController extends Controller
{
    public function index()
    {
        $engagement = Engagement::all();
        $basics = Basic::all();
        return view('admin.engagement.index',compact('engagement','basics'));
    }

    public function store(EngagementRequest $request)
    {
        $engagement = new Engagement();
        $engagement->basics_id = $request['basics_id'];
        $engagement->description = $request['description'];
        $engagement->price = $request['price'];
        $engagement->save();
        return redirect()->route('engagements')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $engagement = Engagement::find($id);
        $basic = Basic::all();
        return view('admin.engagement.edit',compact('engagement','basic'));
    }

    public function update(EngagementRequest $request, $id)
    {
        $engagement = Engagement::find($id);
        $engagement->basics_id = $request->basics_id;
        $engagement->description = $request->description;
        $engagement->price = $request->price;
        $engagement->save();
        return redirect()->route('engagements')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $engagement = Engagement::find($id);
        $engagement->delete();
        return redirect()->route('engagements')->with('danger','Delete Successfully');
    }
    
}
