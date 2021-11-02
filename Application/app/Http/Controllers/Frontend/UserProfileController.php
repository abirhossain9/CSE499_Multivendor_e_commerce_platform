<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use File;
use Image;


class UserProfileController extends Controller
{


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->address =$request->address;
        if(!empty($request->image)){
            if(File::exists('frontend/images/user/'.$user->image)){
                File::delete('frontend/images/user/'.$user->image);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('frontend/images/user/'.$img);
            Image::make($image)->save($location);
            $user->image = $img;
        }
        $user->save();
        return redirect()->route('user.dashboard');

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
