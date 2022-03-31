<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class QuizController extends Controller
{
    public function text() {
        $pdf = PDF::loadView('quiz');
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
