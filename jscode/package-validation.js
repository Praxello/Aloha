$(function() {
    var jvalidate = $("#packageForm").validate({
        ignore: [],
        rules: {
            packageTitle: {
                required: true,
                lettersonly: true
            },
            packageCost: {
                required: true,
                number: true
            }

        },
        messages: {
            packageTitle: {
                required: "Please enter Package Title",
                lettersonly: "Enter only character"

            },
            packageCost: {
                required: "Please Enter a package cost",
                number: "Enter valid Amount"
            }

        }
    });
});