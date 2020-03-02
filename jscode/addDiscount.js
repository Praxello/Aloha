$('#packageForm').on('submit', function(e) {
    e.preventDefault();
    $("#packageForm").validate({
        ignore: [],
        rules: {
            dicountTitle: {
                required: true

            },
            branchId: {
                required: true
            }

        },
        messages: {
            dicountTitle: {
                required: "Please enter Discount Title"

            },
            branchId: {
                required: "Select from list"
            }

        }
    });
    var returnVal = $("#packageForm").valid();
    if (returnVal) {
        $.ajax({
            url: url + 'addDiscountClass.php',
            type: 'POST',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.Responsecode == 200) {
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#packageForm').trigger('reset');
                    $('#demoModal').modal('hide');
                    discount.set(response.Data.Id, response.Data);
                    listDiscount(discount);

                } else {
                    swal({
                        position: 'top-end',
                        icon: 'warning',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                }
            }
        });
    }
});