<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Banner;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Order;
use App\Models\Frontend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.order.checkout');
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
        $id = Auth::user()->id;
        $products = Cart::orderBy('id','asc')->where('user_id',$id)->get();
        if(!empty($products)){
            foreach ($products as $product) {
                $order = new Order();
                $order->user_id = $product->user_id;
                $order->name = $request->name;
                $order->ip_address = $product->ip_address;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->shipping_address = $request->shipping_address;
                $order->shop_id = $product->shop_id;
                $order->product_id = $product->product_id;
                $order->product_quantity = $product->product_quantity;
                $req_product = Product::orderBy('id','asc')->where('id', $product->product_id)->first();
                $final_price = $req_product->product_price * $product->product_quantity;
                $order->product_final_price = $final_price;
                if($order->save()){
                    $product->delete();
                }
                else{
                    return view('frontend.cart.cart_index');
                }
            }
            $banners = Banner::orderBy('id', 'ASC')->get();
            return view('frontend.index', compact('banners'));
        }

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
        //
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
        $order = Order::find($id);

        $order->received_by_rider = 2;
        $order->is_complete = 1;
        $order->save();
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
    public function payment_code($id)
    {
        $order = Order::find($id);
        $code = uniqid();
        $order->payment_code = $code;
        if ($order->save()) {
            return view('frontend.order.payment',compact('order'));
        }
        else {
            return redirect()->route('user.dashboard');
        }
    }
    public function payment_check(Request $request,$id)
    {
        $order = Order::find($id);
        $db_code = $order->payment_code;
        $user_code = $request->code;
        if ($db_code == $user_code ) {
            $order->is_paid = 1;
            $order->received_by_rider = 3;
            $order->is_complete = 2;
            if($order->save()){
                return view('frontend.order.payment_status', compact('order'));
            }
            else{
                return redirect()->route('user.dashboard');
            }
        }
        else{
            return view('frontend.order.payment_err');
        }

    }

}
