<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view() {
        
        return view('Mahasiswa.index');
    }
    public function dashboard() {
        
        return view('dashboard');
    }

}
