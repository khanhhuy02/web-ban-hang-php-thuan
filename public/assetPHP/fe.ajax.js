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
        
        let url = "gio-hang";
        console.log(url);
        
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
});
