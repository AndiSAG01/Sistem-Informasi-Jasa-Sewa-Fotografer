<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GroupsRequest;
use App\Models\Basic;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::all();
        $basics = Basic::all();
        return view('admin.group.index',compact('group','basics'));
    }

    public function store(GroupsRequest $request)
    {
        $group = new Group();
        $group->basics_id = $request->basics_id;
        $group->description = $request->description;
        $group->price = $request->price;
        $group->save();
        return redirect()->route('groups')->with('success','Add Successfully');
    }

    public function edit($id)
    {
        $group = Group::find($id);
        $basic = Basic::all();
        return view('admin.group.edit',compact('group','basic'));
    }

    public function update(GroupsRequest $request, $id)
    {
        $group = Group::find($id);
        $group->basics_id = $request->basics_id;
        $group->description = $request->description;
        $group->price = $request->price;
        $group->save();
        return redirect()->route('groups')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->route('groups')->with('danger','Delete Successfully');
    }
    
}
