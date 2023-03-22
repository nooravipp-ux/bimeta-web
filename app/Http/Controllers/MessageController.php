<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(){
        $data = DB::table('t_message')->get();
        return view('admin.messages.index', compact('data'));
    }

    public function store(Request $request){
        DB::table('t_message')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'pesan' => $request->pesan,
            'status_read' => 0,
        ]);

        return redirect()->route('beranda');
    }

    public function delete($id){
        DB::table('t_message')->where('id', $id)->delete();
        return redirect()->back();
    }
}
