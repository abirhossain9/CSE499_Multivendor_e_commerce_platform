<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Cart;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;


class CartController extends Controller
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
    public function cartIndex()
    {
        $cartItems = Cart::orderBy('id','asc')->where('user_id',Auth::id())->orWhere('user_id',request()->ip())->get();
        return view('frontend.cart.cart_index',compact('cartItems'));
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
        $this->validate($request,
        ['product_id' => 'required'],
        [
            'product_id.required' => 'Please Chose Your Product'
        ]);
        if(Auth::check()){
            $cart = Cart::where('user_id',Auth::id())->where('product_id',$request->product_id)->first();
        }
        else{
             $cart = Cart::where('ip_address',$request->ip())->where('product_id',$request->product_id)->first();
        }
        if(!is_null($cart)){
            $cart->increment('product_quantity');
        }
        else{
            $cart = new Cart();
            if(Auth::check()){
                $cart->user_id = Auth::id();
            }
            $cart->ip_address = $request->ip();
            $cart->product_id = $request->product_id;
            $cart->shop_id = $request->shop_id;
            $cart->save();
        }
        return redirect()->route('carts');
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request,$id)
     {
        $cart = Cart::find($id);
        if(!is_null($cart)){
            $cart->product_quantity = $request->product_quantityp;
            $cart->save();
        }
        else{
            return redirect()->route('carts');
        }
         return redirect()->route('carts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        if(!is_null($cart)){
            $cart->delete();
        }
        else{
            return redirect()->route('carts');
        }
        return redirect()->route('carts');
    }
}
