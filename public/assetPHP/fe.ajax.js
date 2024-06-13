$(document).ready(function () {
    $('.add-to-cart').click(function () {
        var price_new = $(this).closest('.product').find('.price-new').text();
        var names = $(this).closest('.product').find('.names').text();
        var image = $(this).closest('.product').find('.image').attr('src');
        var product_id = $(this).closest('.product').find('.product-id').val();
        let url = "them-gio-hang";
        $.ajax({
            method: "POST",
            url: url,
            dataType: "json",
            data: {
                product_id: product_id,
                price_new: price_new,
                image: image,
                names: names,
            },
            success: function (response) {
                console.log(response);
            }
        });
    });

    $('.delete-to-cart').click(function () {
        var product_id = $(this).closest('.product-card').find('.product-id').val();

        let url = "/mvc/gio-hang/" + product_id;

        $.ajax({
            method: "POST", // Change the HTTP method to POST
            url: url,
            dataType: "json",
            data: {
                product_id: product_id,
            },
            success: function (response) {
                console.log(response.responseData);
            }
        });
    });
}); $(document).ready(function () {
    $('.add-to-cart').click(function () {
        var price_new = $(this).closest('.product').find('.price-new').text();
        var names = $(this).closest('.product').find('.names').text();
        var image = $(this).closest('.product').find('.image').attr('src');
        var product_id = $(this).closest('.product').find('.product-id').val();
        var quantity = 1;
        let url = "them-gio-hang";
        $.ajax({
            method: "POST",
            url: url,
            dataType: "json",
            data: {
                product_id: product_id,
                price_new: price_new,
                image: image,
                names: names,
                quantity: quantity,
            },
            success: function (response) {
                console.log(response);
            }
        });
    });

    $('.delete-to-cart').click(function () {
        // closest('tr')
        var product_id = $(this).closest('.product-card').find('.product-id').val();
        var row = $(this).closest('tr');

        let url = "gio-hang/" + product_id;

        $.ajax({
            method: "POST", // Change the HTTP method to POST
            url: url,
            dataType: "json",
            data: {
                product_id: product_id,
            },
            success: function (response) {
                console.log(response.responseData);
                // row.remove()
                location.reload()
            }
        });
    });
    $('.qtybutton').click(function () {
        var product_id = $(this).closest('.product-card').find('.product-id').val();
        var quantity = $(this).closest('.product-card').find('.quantity').val();
        var total_price_cell = $(this).closest('.product-card').find('.productSubtotal');
        var total_price_product = $('.total-price-product');
    
        let url = "so-luong-tang-giam/" + product_id;
    
        $.ajax({
            method: "POST",
            url: url,
            dataType: "json",
            data: {
                product_id: product_id,
                quantity: quantity,
            },
            success: function (responseData) {
                // var total_price_products = 0;
    
                // $('.productSubtotal').each(function () {
                //     var subtotal = parseFloat($(this).text());
                //     if (!isNaN(subtotal)) {
                //         total_price_products += subtotal;
                //     }
                // });
                
                location.reload();
                // total_price_product.text(total_price_products);
    
            }
        });
    });
});