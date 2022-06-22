<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::disk('local')->put('public/product', $request->product_img);
        $path = '/'.str_replace("public","storage",$path);
        Product::create([
            'img_path' => $path,
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_detail' => $request->product_detail,
            'product_qty' => $request->product_qty,
        ]);
        return redirect('/product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->hasfile('product_img')){
            $path = Storage::disk('local')->put('public/product', $request->product_img);
            $path = '/'.str_replace("public","storage",$path);

            $target = str_replace("/storage","public",$product->img_path);
            Storage::disk('local')->delete($target);

            $product->img_path = $path;
        }

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_detail = $request->product_detail;
        $product->product_qty = $request->product_qty;
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $target = str_replace("/storage","public",$product->img_path);
        Storage::disk('local')->delete($target);
        $product->delete();
        return redirect('/product');
    }
}
