<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function beranda(){
        $clients = DB::table('m_customer')->get();
        $testimonis = DB::table('t_customer_testimoni')->get();
        return view('welcome', compact('clients','testimonis'));
    }

    public function companyProfile(){
        return view('profil-perusahaan');
    }

    public function product(){
        $dataCategory = DB::table('m_product_category')->get();
        $dataProduct = DB::table('t_product')
                    ->select('t_product.*', 'm_product_category.category_name')
                    ->join('m_product_category', 'm_product_category.id', '=', 't_product.category_id')->get();
        $clients = DB::table('m_customer')->get();

        return view('product', compact('dataCategory','dataProduct','clients'));
    }

    public function contact(){
        return view('contact');
    }
}
