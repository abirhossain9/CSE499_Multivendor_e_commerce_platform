<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Product;
use App\Models\Frontend\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function manageProduct()
    {
        return view('frontend.product.manage_product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $shop = Shop::orderBy('id', 'asc')->get();
         return view('frontend.product.add_product',compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product();
        $product->product_name  =$request->product_name;
        $product->slug =Str::slug($request->product_name);
        $product->product_price =$request->product_price;
        $product->product_description_short =$request->product_description_short;
        $product->product_description_long =$request->product_description_long;
        $product->shop_id = $request->shop_id;
        $product->product_category =$request->product_category;
        if($request->product_images){
            $image = $request->file('product_images');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/'.$img);
            Image::make($image)->save($location);
            $product->product_image = $img;
        }
        $product->save();
        $product->save();
        return redirect()->route('shop.dashboard',$request->shop_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop_products($id)
    {
         $products = Product::orderBy('product_name','asc')->where('shop_id',$id)->get();
         $shop = Shop::find($id);
         return view('frontend.shop.individual_shop_page',compact('products','shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $product = Product::find($id);
        $shop = Shop::orderBy('id', 'asc')->get();
        return view('frontend.product.product_details',compact('product','shop'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
