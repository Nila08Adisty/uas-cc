<?php
namespace App\Http\Controllers;

use Illuminate\Http\request;

class M4Controller extends Controller
{
    public function lat1()
    {
        $nama = 'Ni Made Ayu Mas Indra Dewi';
        $alamat = 'Tabanan';
        return view('m4.lat1', compact('nama','alamat'));
    }

    public function lat2()
    {
        $nama = ' Ni Made Ayu Mas Indra Dewi';
        $nilai = '80';
        return view('m4.lat2', compact('nama','nilai'));
    }

    public function lat3()
    {
        $nama = ' Ni Made Ayu Mas Indra Dewi';
        $hobi = ['menari', 'ngoding', 'makan', 'tidur'];
        $skill = ['PHP', 'HTML', 'CSS', 'Database'];
        return view('m4.lat3', compact('nama','hobi','skill'));
    }

    public function lat4()
    {
        $nama = '  Ni Made Ayu Mas Indra Dewi';
        $alamat = 'Tabanan';
        return view('m4.lat4', compact('nama','alamat'));
    }

    public function m4_identitas()
    {
        $nama = ' Ni Made Ayu Mas Indra Dewi';
        $alamat = 'Tabanan';
        return view('m4.identitas', compact('nama','alamat'));
    }

    public function m4_pendidikan()
    {
      return view('m4.pendidikan');
    }

    public function m4_skill()
    {
        $skill = ['PHP', 'HTML', 'CSS', 'Database'];
        return view('m4.skill', compact('skill'));
    }

    public function alamat()
    {
      return view('alamat');
    }
}

