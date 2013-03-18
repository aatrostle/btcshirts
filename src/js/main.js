// $(".shirt-request").click(function() {
//   var shirtId = $(this).attr('id');
//   $("#mce-SHIRT").val(shirtId)
// });
var shirtId;

$(".shirt-request").click(function() {
    shirtId = $(this).attr('id');
});

console.log(shirtId);

$(".start-order").click(function(){

    var orderAddress = $(".order-address").serializeArray();

    var orderAddressString = "";

    $.each(orderAddress, function(key, value){
        orderAddressString += value.value + "\n";
    });

    var orderData = {
        "name": shirtId,
        "custom": orderAddressString,
        "description": "Sample description",
    };

    var coinbase = "https://coinbase.com/checkouts/";
    $.ajax({
        url: "getpayment.php",
        type: "POST",
        dataType: "JSON",
        data: orderData,
        success: function(data) {
            $(".start-order").attr("href", coinbase + data.button.code);
            $(".start-order").text("Pay with Bitcoins now");
            $(".start-order").attr("class", "btn btn-success order-ready");
        }
    });
});