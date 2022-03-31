<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Qalqalah;

class QalqalahController extends Controller
{
    public function qalqalah(){
        $qalqalahAll = Qalqalah::all(); 
        return view('qalqalah')->with(compact('qalqalahAll'));
    }

    public function index(){
        $qalqalah = Qalqalah::all();
        return view('manageqal',['qalqalah' => $qalqalah]);
    }

    public function add(){
        return view('createqal');
    }

    public function create(Request $request){
        Qalqalah::create([
            'title' => $request->title,
            'pembimbing' => $request->pembimbing,
            'youtube' => $request->youtube
        ]);
        return redirect()->route('manageqal');
    }

    public function edit($id){
        $qalqalah = Qalqalah::find($id);

        return view('editqal',['qalqalah'=>$qalqalah]);
    }

    public function update($id, Request $request){
        $qalqalah = Qalqalah::find($id);
        $qalqalah->title = $request->title;
        $qalqalah->pembimbing = $request->pembimbing;
        $qalqalah->youtube = $request->youtube;

        $qalqalah->save();

        return redirect()->route('manageqal');
    }

    public function delete($id){
        $qalqalah = Qalqalah::find($id);
        $qalqalah->delete();

        return redirect()->route('manageqal');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
