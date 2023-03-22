<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestimoniController extends Controller
{
    public function index(){
        $data = DB::table('t_customer_testimoni')->get();
        return view('admin.testimoni.index', compact('data'));
    }

    public function create(){
        return view('admin.testimoni.create');
    }

    public function store(Request $request){
        DB::table('t_customer_testimoni')->insert([
            'customer_name' => $request->customer_name,
            'pic' => $request->pic,
            'testimoni' => $request->testimoni,
            'created_by' => Auth::user()->name,
            'updated_by' => Auth::user()->name
        ]);

        return redirect()->route('testimoni.index');
    }

    public function edit($id){
        $data = DB::table('t_customer_testimoni')->where('id', $id)->first();
        return view('admin.testimoni.edit', compact('data'));
    }

    public function update(Request $request){
        DB::table('t_customer_testimoni')->where('id', $request->id)->update([
            'customer_name' => $request->customer_name,
            'pic' => $request->pic,
            'testimoni' => $request->testimoni
        ]);

        return redirect()->route('testimoni.index');
    }

    public function delete($id){
        DB::table('t_customer_testimoni')->where('id', $id)->delete();
        return redirect()->back();
    }
}
