<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function halamanutama(){
        return view('dashboard');
    }

}
