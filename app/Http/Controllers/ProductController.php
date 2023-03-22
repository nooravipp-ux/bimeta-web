<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $dataCategory = DB::table('m_product_category')->get();
        $dataProduct = DB::table('t_product')
            ->select('t_product.*', 'm_product_category.category_name')
            ->join('m_product_category', 'm_product_category.id', '=', 't_product.category_id')->get();

        return view('admin.products.index', compact('dataCategory', 'dataProduct'));
    }

    public function categoryCreate()
    {
        return view('admin.products.createCategory');
    }

    public function categoryStore(Request $request)
    {
        DB::table('m_product_category')->insert([
            'category_name' => $request->category_name,
            'created_by' => Auth::user()->name,
            'updated_by' => Auth::user()->name
        ]);

        return redirect()->route('conf.product.index');
    }

    public function editCategory($id)
    {
        $dataCategory = DB::table('m_product_category')->where('id', $id)->first();
        return view('admin.products.editCategory', compact('dataCategory'));
    }

    public function updateCategory(Request $request)
    {
        DB::table('m_product_category')->where('id', $request->id)->update([
            'category_name' => $request->category_name
        ]);
        return redirect()->route('conf.product.index');
    }

    public function create()
    {
        $dataCategory = DB::table('m_product_category')->get();
        return view('admin.products.createProduct', compact('dataCategory'));
    }

    public function store(Request $request)
    {

        $file_product_img_1 = $request->file('product_img_1');
        $file_product_img_2 = $request->file('product_img_2');
        $file_product_img_3 = $request->file('product_img_3');

        $file_product_img_1_fileName = NULL;
        $file_product_img_2_fileName = NULL;
        $file_product_img_3_fileName = NULL;

        if ($file_product_img_1) {
            $file_product_img_1_fileName = time() . "_" . $file_product_img_1->getClientOriginalName();
            $file_product_img_1_destinationPath = public_path() . '/front/img/products';
            $file_product_img_1->move($file_product_img_1_destinationPath, $file_product_img_1_fileName);
        }

        if ($file_product_img_2) {
            $file_product_img_2_fileName = time() . "_" . $file_product_img_2->getClientOriginalName();
            $file_product_img_2_destinationPath = public_path() . '/front/img/products';
            $file_product_img_2->move($file_product_img_2_destinationPath, $file_product_img_2_fileName);
        }

        if ($file_product_img_3) {
            $file_product_img_3_fileName = time() . "_" . $file_product_img_3->getClientOriginalName();
            $file_product_img_3_destinationPath = public_path() . '/front/img/products';
            $file_product_img_3->move($file_product_img_3_destinationPath, $file_product_img_3_fileName);
        }

        DB::table('t_product')->insert([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'product_img_1' => $file_product_img_1_fileName,
            'product_img_2' => $file_product_img_2_fileName,
            'product_img_3' => $file_product_img_3_fileName,
            'created_by' => Auth::user()->name,
            'updated_by' => Auth::user()->name
        ]);

        return redirect()->route('conf.product.index');
    }

    public function edit($id)
    {
        $dataCategory = DB::table('m_product_category')->get();
        $dataProduct = DB::table('t_product')->where('id', $id)->first();
        return view('admin.products.edit', compact('dataCategory', 'dataProduct'));
    }

    public function update(Request $request)
    {
        DB::table('t_product')->where('id', $request->id)->update([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'updated_by' => Auth::user()->name
        ]);

        return redirect()->route('conf.product.index');
    }

    public function delete($id)
    {

        $product = DB::table('t_product')->where('id', $id)->first();

        if (File::exists(public_path('front/img/products/' . $product->product_img_1))) {
            File::delete(public_path('front/img/products/' . $product->product_img_1));
        }

        if (File::exists(public_path('front/img/products/' . $product->product_img_2))) {
            File::delete(public_path('front/img/products/' . $product->product_img_2));
        }

        if (File::exists(public_path('front/img/products/' . $product->product_img_3))) {
            File::delete(public_path('front/img/products/' . $product->product_img_3));
        }

        DB::table('t_product')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function updateImage(Request $request){

        $data = DB::table('t_product')->where('id', $request->id)->first();

        $file_product_img_1 = $request->file('product_img_1');
        $file_product_img_2 = $request->file('product_img_2');
        $file_product_img_3 = $request->file('product_img_3');
        
        if($file_product_img_1){
            if (File::exists(public_path('front/img/products/' . $data->product_img_1))) {

                File::delete(public_path('front/img/products/' . $data->product_img_1));
            }

            $file_product_img_1_fileName = time() . "_" . $file_product_img_1->getClientOriginalName();
            $file_product_img_1_destinationPath = public_path() . '/front/img/products';
            $file_product_img_1->move($file_product_img_1_destinationPath, $file_product_img_1_fileName);

            DB::table('t_product')->where('id', $request->id)->update([
                'product_img_1' => $file_product_img_1_fileName
            ]);
        }

        if($file_product_img_2){
            if (File::exists(public_path('front/img/products/' . $data->product_img_2))) {

                File::delete(public_path('front/img/products/' . $data->product_img_2));
            }

            $file_product_img_2_fileName = time() . "_" . $file_product_img_2->getClientOriginalName();
            $file_product_img_2_destinationPath = public_path() . '/front/img/products';
            $file_product_img_2->move($file_product_img_2_destinationPath, $file_product_img_2_fileName);

            DB::table('t_product')->where('id', $request->id)->update([
                'product_img_2' => $file_product_img_2_fileName
            ]);
        }

        if($file_product_img_3){
            if (File::exists(public_path('front/img/products/' . $data->product_img_3))) {

                File::delete(public_path('front/img/products/' . $data->product_img_3));
            }

            $file_product_img_3_fileName = time() . "_" . $file_product_img_3->getClientOriginalName();
            $file_product_img_3_destinationPath = public_path() . '/front/img/products';
            $file_product_img_3->move($file_product_img_3_destinationPath, $file_product_img_3_fileName);

            DB::table('t_product')->where('id', $request->id)->update([
                'product_img_3' => $file_product_img_3_fileName
            ]);
        }

        return redirect()->back();
    }
}
