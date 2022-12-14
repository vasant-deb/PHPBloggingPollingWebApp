$(document).ready(function(){

    $('.addtocart').on('click', function(event) {

        $.ajax({
            type: "POST",
            url: Shop.basePath + "shop/itemupdate",
            data: {
                id: $(this).attr("id"),
                mods: $("#modselected").attr("value"),
                quantity: 1
            },
            dataType: "json",
            success: function(data) {

                $('#msg').html('<div class="alert alert-success">Product Added to Shopping Cart</div>');
                $('#cartbutton').show();
                $('.flash-msg').delay(2000).fadeOut('slow');

            },
            error: function() {
                alert('big problems !!!');
            }
        });

        return false;

    });

});
