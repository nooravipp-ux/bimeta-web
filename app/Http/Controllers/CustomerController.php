<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        $data = DB::table('m_customer')->get();
        return view('admin.customer.index', compact('data'));
    }

    public function create(){
        return view('admin.customer.create');
    }

    public function store(Request $request){

        $file_logo = $request->file('logo');
        $file_logo_fileName = NULL;

        if ($file_logo) {
            $file_logo_fileName = time() . "_" . $file_logo->getClientOriginalName();
            $file_logo_destinationPath = public_path() . '/front/img/customers';
            $file_logo->move($file_logo_destinationPath, $file_logo_fileName);
        }

        DB::table('m_customer')->insert([
            'name' => $request->name,
            'logo' => $file_logo_fileName,
            'created_by' => Auth::user()->name,
            'updated_by' => Auth::user()->name
        ]);

        return redirect()->route('customers.index');
    }

    public function edit($id){
        $data = DB::table('m_customer')->where('id', $id)->first();

        return view('admin.customer.edit', compact('data'));
    }

    public function update(Request $request){
        DB::table('m_customer')->where('id', $request->id)->update([
            'name' => $request->name,
        ]);
        return redirect()->route('customers.index');
    }

    public function delete($id){
        DB::table('m_customer')->where('id', $id)->delete();
        return redirect()->back();
    }
}
