<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Mad;

class MadController extends Controller
{
    public function mad(){
        $madAll = Mad::all();
        return view('mad')->with(compact('madAll'));
    }

    public function index(){
        $mad = Mad::all();
        return view('managemad',['mad' => $mad]);
    }

    public function add(){
        return view('createmad');
    }

    public function create(Request $request){
        Mad::create([
            'title' => $request->title,
            'pembimbing' => $request->pembimbing,
            'youtube' => $request->youtube
        ]);
        return redirect()->route('managemad');
    }

    public function edit($id){
        $mad = Mad::find($id);

        return view('editmad',['mad'=>$mad]);
    }

    public function update($id, Request $request){
        $mad = Mad::find($id);
        $mad->title = $request->title;
        $mad->pembimbing = $request->pembimbing;
        $mad->youtube = $request->youtube;

        $mad->save();

        return redirect()->route('managemad');
    }

    public function delete($id){
        $mad = Mad::find($id);
        $mad->delete();

        return redirect()->route('managemad');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
