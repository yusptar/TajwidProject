<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\NunSukun;
use App\MimSukun;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $mimsukunAll = MimSukun::all(); 
        $nunsukunAll = NunSukun::all(); 
        return view('home')->with(compact('mimsukunAll', 'nunsukunAll'));
    }

    public function indexnun(){
        $nunsukun = NunSukun::all();
        return view('managenun',['nunsukun' => $nunsukun]);
    }

    public function indexmim(){
        $mimsukun = MimSukun::all();
        return view('managemim',['mimsukun' => $mimsukun]);
    }

    public function addnun(){
        return view('createnun');
    }

    public function addmim(){
        return view('createmim');
    }

    public function createnun(Request $request){
        NunSukun::create([
            'title' => $request->title,
            'pembimbing' => $request->pembimbing,
            'youtube' => $request->youtube
        ]);
        return redirect()->route('managenun');
    }

    public function createmim(Request $request){
        MimSukun::create([
            'title' => $request->title,
            'pembimbing' => $request->pembimbing,
            'youtube' => $request->youtube
        ]);
        return redirect()->route('managemim');
    }

    public function editnun($id){
        $nunsukun = NunSukun::find($id);

        return view('editnun',['nunsukun'=>$nunsukun]);
    }

    public function editmim($id){
        $mimsukun = MimSukun::find($id);

        return view('editmim',['mimsukun'=>$mimsukun]);
    }

    public function updatenun($id, Request $request){
        $nunsukun = NunSukun::find($id);
        $nunsukun->title = $request->title;
        $nunsukun->pembimbing = $request->pembimbing;
        $nunsukun->youtube = $request->youtube;

        $nunsukun->save();

        return redirect()->route('managenun');
    }

    public function updatemim($id, Request $request){
        $mimsukun = MimSukun::find($id);
        $mimsukun->title = $request->title;
        $mimsukun->pembimbing = $request->pembimbing;
        $mimsukun->youtube = $request->youtube;

        $mimsukun->save();

        return redirect()->route('managemim');
    }

    public function deletenun($id){
        $nunsukun = NunSukun::find($id);
        $nunsukun->delete();

        return redirect()->route('managenun');
    }

    public function deletemim($id){
        $mimsukun = MimSukun::find($id);
        $mimsukun->delete();

        return redirect()->route('managemim');
    }
}


