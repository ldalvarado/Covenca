<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarCodeController extends Controller
{
    // index
    public function index()
    {
        return view('barcode');
    }
}