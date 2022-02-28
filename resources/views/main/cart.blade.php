@extends('layouts.main')
@section('title')
    My Cart
@endsection
@section('content')
<style>
    h5 , h6 {
        font:bold;
        font-weight:bolder;
        background: -webkit-radial-gradient(rgb(97, 10, 97), rgb(230, 142, 230));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
        <div class="py-3 mb-4 shadow-lg bg-warning">
            <div class="container">
                <h5>
                <a href="{{ url('/') }}">
                    Home
                </a>
                /
                <a href="{{ url('cart') }}">
                    Cart
                </a>
                </h5>
            </div>
        </div>
<div class="container my-5" id="refreshdata">
    <div class="card shadow-lg" >
        <div class="card-body h-100">
            @foreach ($cartitems as $item)
                <div class="row product_data">
                    <div class="col-md-2">
                        <img src="{{ asset('uploads/products/'.$item->products->img) }}" height="120px" width="120px" class="mb-2 mt-1 rounded" alt="item-img">
                    </div>
                    <div class="col-md-5">
                        <h6>{{$item->products->name}}</h6>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        <label for="Quantity">Quantity</label>
                        <div class="input-group text-center mb-3" style="width:130px;">
                        <button class="input-group-text minus-btn">-</button>
                        <input type="text" name="quantity" value="{{ $item->prod_qty }}" class="form-control qty-input text-center">
                        <button class="input-group-text plus-btn">+</button>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger delete-cart"><i class="fa fa-trash"></i> Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){

    loadcart();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

    function loadcart()
    {
        $.ajax({
            method:"GET",
            url:"/load-cart-data",
            success: function(response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
            });
    }


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
    var inc_value = $('.qty-input').val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value < 10){
        value++;
        $('.qty-input').val(value);
    }

});
$('.minus-btn').click(function (e){
    e.preventDefault();
    var dec_value = $('.qty-input').val();
    var value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value > 1){
        value--;
        $('.qty-input').val(value);
    }

});
    $('.delete-cart').click(function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();


        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
            method:"POST",
            url:"delete-cart",
            data: {
            'prod_id':prod_id
        },
        success: function(response){
            Swal.fire("",response.status,"success");
            $('#refreshdata').load( " #refreshdata" );
            loadcart();

        }

        });



    })

});

</script>

@endsection
