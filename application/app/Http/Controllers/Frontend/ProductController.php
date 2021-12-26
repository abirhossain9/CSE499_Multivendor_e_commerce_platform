<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Frontend\Product;
use App\Models\Frontend\ProductImage;
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

    public function manageProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::orderBy('name','asc')->get();
        return view('frontend.product.manage_product',compact('product','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $shop = Shop::orderBy('id', 'asc')->get();
         $categories = Category::orderBy('name','asc')->get();
         return view('frontend.product.add_product',compact('shop','categories'));
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
        $product->category_id =$request->product_category;
        $product->prodcut_quantity =$request->prodcut_quantity;
        if($request->product_images){
            $image = $request->file('product_images');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/'.$img);
            Image::make($image)->save($location);
            $product->product_image = $img;
        }
        $product->save();
        if(!is_null($request->p_image_1)){
            # code...
            $image = $request->file('p_image_1');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/'.$img);
            Image::make($image)->save($location);
            $p_image_1 = new ProductImage();
            $p_image_1->product_id = $product->id;
            $p_image_1->image = $img;
            $p_image_1->save();
        }
        if (!is_null($request->p_image_2)) {
            # code...
            $image = $request->file('p_image_2');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/' . $img);
            Image::make($image)->save($location);
            $p_image_2 = new ProductImage();
            $p_image_2->product_id = $product->id;
            $p_image_2->image = $img;
            $p_image_2->save();
        }
        if (!is_null($request->p_image_3)) {
            # code...
            $image = $request->file('p_image_3');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/' . $img);
            Image::make($image)->save($location);
            $p_image_3 = new ProductImage();
            $p_image_3->product_id = $product->id;
            $p_image_3->image = $img;
            $p_image_3->save();
        }
        return redirect()->route('shop.dashboard',$request->shop_id);
    }

    public function updateProductVendor(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name  =$request->product_name;
        $product->slug =Str::slug($request->product_name);
        $product->product_price =$request->product_price;
        $product->product_description_short =$request->product_description_short;
        $product->product_description_long =$request->product_description_long;
        $product->shop_id = $request->shop_id;
        $product->category_id =$request->product_category;
        $product->prodcut_quantity =$request->prodcut_quantity;
        if($request->product_images){
            if(File::exists('backend/img/product/'.$product->product_image)){
                File::delete('backend/img/product/'.$product->product_image);
            }
            $image = $request->file('product_images');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/product/'.$img);
            Image::make($image)->save($location);
            $product->product_image = $img;
        }
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
         //$categories = Category::orderby('name','asc')->get();
         $images = ProductImage::orderby('image','asc')->get();
         return view('frontend.shop.individual_shop_page',compact('products','shop','images'));
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
    public function destroy_by_admin($id)
    {
        $product = Product::find($id);
        if(File::exists('backend/img/product/'.$product->product_image)){
                File::delete('backend/img/product/'.$product->product_image);
        }
        $product->delete();
        return redirect()->route('product.manage');
    }
     public function deleteProductVendor(Request $request, $id)
    {
        $product = Product::find($id);
        if(File::exists('backend/img/product/'.$product->product_image)){
                File::delete('backend/img/product/'.$product->product_image);
        }
        $product->delete();
        return redirect()->route('shop.dashboard',$request->shop_id);
    }
}
