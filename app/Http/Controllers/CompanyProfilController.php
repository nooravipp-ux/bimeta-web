<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfilController extends Controller
{
    public function index(){
        return view('admin.company-profile.index');
    }

    public function edit(){
        return view('company-profile.edit');
    }

    public function update(){
        return view('company-profile.edit');
    }

    public function delete(){
        return view('company-profile.edit');
    }
}

