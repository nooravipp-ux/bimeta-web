<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CContactController extends Controller
{

    public function index(){
        $data = DB::table('cfg_contact')->first();
        return view('admin.pages.contact.index', compact('data'));
    }

}
