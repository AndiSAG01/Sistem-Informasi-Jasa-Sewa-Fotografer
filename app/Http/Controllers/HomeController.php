<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreRequest;
use App\Models\Aqiqah;
use App\Models\Engagement;
use App\Models\Familly;
use App\Models\Group;
use App\Models\Personal;
use App\Models\PreWedding;
use App\Models\Resevasi_Pre;
use App\Models\User;
use App\Models\Wedding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('user.dashboard');
    }

    public function about()
    {
        return view('user.about');
    } 
    public function prewedding()
    {
        $prewedding = PreWedding::all();
        return view('user.guide.prewedding',compact('prewedding'));
    } 

    public function wedding()
    {
        $wedding = Wedding::all();
        return view('user.guide.wedding', compact('wedding'));
    }

    public function engagement()
    {
        $engagement = Engagement::all();
        return view('user.guide.engagement', compact('engagement'));
    }

    public function aqiqah()
    {
        $aqiqah = Aqiqah::all();
        return view('user.guide.aqiqah', compact('aqiqah'));
    }

    public function personal()
    {
        $personal = Personal::all();
        return view('user.graduation.personal',compact('personal'));
    }

    public function group()
    {
        $group = Group::all();
        return view('user.graduation.group', compact('group'));
    }

    public function familly()
    {
        $familly = Familly::all();
        return view('user.graduation.familly', compact('familly'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
