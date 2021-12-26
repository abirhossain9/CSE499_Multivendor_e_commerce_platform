@php
    $cartItems = App\Models\Frontend\Cart::orderBy('id','asc')->where('user_id',Auth::id())->orWhere('user_id',request()->ip())->get();
@endphp
<li class="dropdown">
    <button class="btn dropdown-toggle dropdown-toggle-split" type="button" id="dropdownCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <li><a href="javascript:void(0)"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span id="checkout_items" class="checkout_items">{{ $cartItems->count() }}</span></a></li>
    </button>

    <div class="dropdown-menu" aria-labelledby="dropdownCartButton">
        <div class="container">
            <div class="shopping-cart">

                <ul class="shopping-cart-items">
                    @php $i = 1 @endphp
                    @php $total_price = 0 @endphp
                    @foreach ($cartItems as $item)
                    <div class="row cart-detail">
                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                            <img src="{{ asset('backend/img/product/'.$item->product->product_image) }}">
                        </div>
                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                            <p>{{ $item->product->product_name }}</p>
                            <span class="count"> Quantity: {{ $item->product_quantity }}</span>
                            <span class="price text-info"> {{ $item->product->product_price * $item->product_quantity }} ৳</span>
                        </div>
                    </div>
                    @php $i++ @endphp
                    @php $total_price += $item->product->product_price * $item->product_quantity @endphp
                    @endforeach
                </ul>

                <div class="shopping-cart-header">
                    <i class="fa fa-shopping-cart cart-icon"></i><span class="cart_badge">{{ $cartItems->count() }}</span>
                    <div class="shopping-cart-total">
                        <span>Total:</span>
                        <span class="text-info">{{ $total_price}} ৳</span>
                    </div>
                </div> <!--end shopping-cart-header -->

                <a class="btn btn-info btn-block btn-sm custom_a" href="{{route('carts')}}" role="button">Edit Cart</a>
                <a class="btn btn-success btn-block btn-sm custom_a" href="javascript:void(0)" role="button">Checkout</a>

            </div> <!--end shopping-cart -->
        </div> <!--end container -->
    </div>

</li>
