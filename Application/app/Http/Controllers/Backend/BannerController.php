<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Banner;
use Illuminate\Http\Request;
use File;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','asc')->get();
        return view('backend.pages.banner.manage',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->banner_text  =$request->banner_text;
        $banner->status  =$request->status;
        if($request->image){
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/banner/'.$img);
            Image::make($image)->save($location);
            $banner->banner_image = $img;
        }
        $banner->save();
        return redirect()->route('banner.manage');
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
        $banner = Banner::find($id);
        if(!empty($banner)){
            return view('backend.pages.banner.edit',compact('banner'));
        }
        else{
            return redirect()->route('banner.manage');
        }
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
        $banner = Banner::find($id);
        $banner->banner_text  =$request->banner_text;
        $banner ->status =$request->status;
        if(!empty($request->image)){
            if(File::exists('backend/img/banner/'.$banner->profile_pic)){
                File::delete('backend/img/banner/'.$banner->profile_pic);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/banner/'.$img);
            Image::make($image)->save($location);
            $banner->banner_image = $img;
        }
        $banner->save();
        return redirect()->route('banner.manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if(File::exists('backend/img/banner/'.$banner->banner_image)){
                File::delete('backend/img/banner/'.$banner->banner_image);
        }
        $banner->delete();
        return redirect()->route('banner.manage');
    }
}
