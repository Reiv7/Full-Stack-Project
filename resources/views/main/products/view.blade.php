@extends('layouts.main')
@section('title' , $products->name)

@section('content')

<style>
    h5 , h3 , h4{
        font:bold;
        font-weight:bolder;
        background: -webkit-radial-gradient(rgb(97, 10, 97), rgb(230, 142, 230));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
        <div class="py-3 mb-4 shadow-lg bg-warning">
            <div class="container">
                <h5 class="mb-0 fw-bolder"><a href="{{ url('/') }}">
                    Collection</a> / <a href="{{url('category')}}"> {{ $products->category->name }} </a> / {{ $products->name }}</h6>

            </div>
        </div>
            <div class="container">
                <div class="card product_date">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 border-light">
                                <img src="{{ asset('uploads/products/'.$products->img) }}" class="w-100 rounded" alt="">
                            </div>
                            <div class="col-md-8">
                                <h4 class="mb-0 fw-bolder">
                                    {{ $products->name }}
                                </h4>
                                <label style="font-size:16px;" class="float-end badge bg-danger trending_tag">{{ $products->trending == '1' ? 'Trending':'' }}</label>
                                <hr>
                                <label class="me-3">Original Price : <s>EGP {{ $products->o_price}}</s></label>
                                <label class="fw-bolder">Selling Price : EGP {{ $products->s_price}}</label>
                                <p class="mt-3">
                                    {!! $products->smol_dscrp !!}
                                </p>
                                <hr>
                                @if($products->qty > 0)
                                    <label class="badge bg-success">In Stock</label>
                                @else
                                    <label class="badge bg-danger">Out Of Stock</label>
                                @endif
                                <div class="row mt-2">
                                    <div class="col-md-2">
                                        <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                        <label for="Quantity">Quantity</label>
                                        <div class="input-group text-center mb-3">
                                            <button class="input-group-text fw-bold minus-btn">-</button>
                                            <input type="text" name="quantity" class="form-control text-center qty-input" value="1">
                                            <button class="input-group-text fw-bold plus-btn">+</button>
                                        </div>
                                    </div>
                                    @if(!Auth::check())
                                    <div class="col-md-10">
                                        <br/>
                                        <a type="button" href="{{ url('login') }}" class="btn btn-primary p-2 me-3  float-start ">Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                        <a type="button" class="btn btn-success p-2 me-3 float-start mb-1">Add to Wishlist <i class="fa fa-heart"></i></a>
                                    </div>
                                    @else
                                    <div class="col-md-10">
                                        <br/>
                                        <button type="button" class="btn btn-primary p-2 me-3 addToCartBtn float-start ">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                                        <button type="button" class="btn btn-success p-2 me-3 float-start mb-1">Add to Wishlist <i class="fa fa-heart"></i></button>
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 px-4">
                        <hr>
                        <h3>Description</h3>
                        <p class="mt-3">
                            {!! $products->dscrp !!}
                        </p>
                    </div>
                </div>
            </div>
@endsection

{{-- @section('scripts')
<script>
   $(document).ready(function(){

$('.addToCartBtn').click(function (e) {

e.preventDefault();

var product_id = $(this).closest('.product_date').find('.prod_id').val();
var product_qty = $(this).closest('.product_date').find('.qty-input').val();

$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});

$.ajax({
method:"POST",
url:"/add-to-cart",
data: {
    'product_id' : product_id,
    'product_qty' : product_qty,
},
success: function(response){
    Swal.fire(response.status);
}
});



});

$('.plus-btn').click(function (e){
e.preventDefault();
var inc_value = $(this).closest('.product_date').find('.qty-input').val();
var value = parseInt(inc_value, 10);
value = isNaN(value) ? 0 : value;
if(value < 10){
value++;
$(this).closest('.product_date').find('.qty-input').val(value);
}

});
$('.minus-btn').click(function (e){
e.preventDefault();
var dec_value = $(this).closest('.product_date').find('.qty-input').val();
var value = parseInt(dec_value, 10);
value = isNaN(value) ? 0 : value;
if(value > 1){
value--;
$(this).closest('.product_date').find('.qty-input').val(value);

}

});

});

</script>

@endsection --}}

