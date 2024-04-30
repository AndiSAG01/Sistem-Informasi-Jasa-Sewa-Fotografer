<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PreweddingRequest;
use App\Models\Basic;
use App\Models\PreWedding;
use Illuminate\Http\Request;

class PreWeddingController extends Controller
{
    public function index()
    {
        $prewedding = PreWedding::all();
        $basics = Basic::all();
        return view('admin.prewedding.index',compact('prewedding','basics'));
    }

    public function store(PreweddingRequest $request)
    {
        // Buat objek PreWedding dan isi dengan data yang divalidasi
        $prewedding = new PreWedding();
        $prewedding->basics_id = $request['basics_id'];
        $prewedding->description = $request['description'];
        $prewedding->price = $request['price'];
    
        // Simpan data ke dalam database
        $prewedding->save();
    
        // Redirect ke halaman preweddings dengan pesan sukses
        return redirect()->route('preweddings')->with('success', 'Add Successfully');
    }
    

    public function edit($id)
    {
        $prewedding = PreWedding::find($id);
        $basic = Basic::all();
        return view('admin.prewedding.edit',compact('prewedding','basic'));
    }

    public function update(PreweddingRequest $request, $id)
    {
        $prewedding = PreWedding::find($id);
        $prewedding->basics_id = $request->basics_id;
        $prewedding->description = $request->description;
        $prewedding->price = $request->price;
        $prewedding->save();
        return redirect()->route('preweddings')->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $prewedding = PreWedding::find($id);
        $prewedding->delete();
        return redirect()->route('preweddings')->with('danger','Delete Successfully');
    }
    
}
