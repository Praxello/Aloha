$('#adviceMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
           
    var returnVal = $("#adviceMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);


        $.ajax({
            url: url + 'insertAdvice.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                  
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#cButton').click();
                    $('#adviceMasterForm').trigger('reset');
                    advice.set(response.Data.adviceId, response.Data);
                    listAdvice(advice);

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
