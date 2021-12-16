<form action="{{ route('carts.store') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <a type="submit" href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
</form>
