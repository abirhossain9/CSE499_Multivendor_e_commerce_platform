<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Product;
use App\Models\Frontend\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::orderBy('id', 'asc')->get();
        return view('backend.pages.shop.manage', compact('shops'));
    }

    public function shopIndex()
    {
        $shops = Shop::orderBy('shop_name', 'asc')->get();
        return view('frontend.shop.shop_index', compact('shops'));
    }

    public function individualShopPage($id)
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor_id = $request->shop_owner;
        $shop = new Shop();
        $vendor = User::find($vendor_id);
        $shop->shop_name  =$request->shop_name;
        $shop->slug =Str::slug($request->shop_name);
        $shop->shop_owner =$request->shop_owner;
        $shop->shop_address =$request->shop_address;
        $shop->shop_phone =$request->shop_phone;
        $shop->shop_description =$request->shop_description;
        $shop->shop_type =$request->shop_type;
        if($request->shop_image){
            $image = $request->file('shop_image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/shop/'.$img);
            Image::make($image)->save($location);
            $shop->shop_image = $img;
        }
        $shop->save();
        $vendor->shop_status = 1;
        $vendor->save();
        return redirect()->route('vendor.dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        if (!empty($shop)) {
            return view('backend.pages.shop.edit', compact('shop'));
        } else {
            return redirect()->route('shop.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateByAdmin(Request $request, $id)
    {
        $shop = Shop::find($id);
        $shop->shop_status = $request->shop_status;
        $shop->save();
        return redirect()->route('shop.manage');
    }
    public function updateByVendor(Request $request, $id)
    {
        $shop  = Shop::find($id);
        if(!empty($shop)){
            return view('frontend.editshop_dashboard',compact('shop'));
        }

    }
    public function updateByVendorfunction(Request $request, $id)
    {
        $shop  = Shop::find($id);
        $shop->shop_name  =$request->shop_name;
        $shop->slug =Str::slug($request->shop_name);
        $shop->shop_address =$request->shop_address;
        $shop->shop_phone =$request->shop_phone;
        $shop->shop_type =$request->shop_type;
        $shop->sale_status =$request->sale_status;
        if(!empty($request->shop_image)){
            if(File::exists('backend/img/shop/'.$shop->shop_image)){
                File::delete('backend/img/shop/'.$shop->shop_image);
            }
            $image = $request->file('shop_image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/shop/'.$img);
            Image::make($image)->save($location);
            $shop->shop_image = $img;
        }
        $shop->save();
        return redirect()->route('vendor.dashboard');
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
