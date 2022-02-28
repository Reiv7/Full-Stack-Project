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
    loadcart();

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
