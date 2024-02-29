<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodbeverage () {
        return view('fnb');
    }
    public function beautyhealth () {
        return view('bnh');
    }
    public function homecare() {
        return view('hnc');
    }
    public function babykid () {
        return view('bnk');
    }
}
