<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function identitas(){
        return view('cv.identitas');
    }
    public function kontak(){
        return view('cv.kontak');
    }
    public function pendidikan(){
        return view('cv.pendidikan');
    }
}