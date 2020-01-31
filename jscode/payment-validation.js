$(function() {
    var jvalidate = $("#paymentForm").validate({
        ignore: [],
        rules: {
            paymentFor: {
                required: true
            },
            dAmt: {
                number: true
            }

        },
        messages: {
            paymentFor: {
                required: "Select doctor from list",
            },
            dAmt: {
                number: "Enter valid amount"
            }
        }
    });
});