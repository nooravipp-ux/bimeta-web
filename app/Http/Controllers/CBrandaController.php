<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CBrandaController extends Controller
{
    public function index(){
        return view('admin.pages.beranda.index');
    }
}
