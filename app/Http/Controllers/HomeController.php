<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function export() {

        $pdf = PDF::loadView('export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
