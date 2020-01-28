$('#addRefNameForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#addRefNameForm").valid();
    if (returnVal) {
    
        var fData = new FormData(this);
     

        $.ajax({
            url: url + 'insertReferringMaster.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.Responsecode == 200) {
                    // alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                   

                } else {
                    swal({
                        position: 'top-end',
                        icon: 'warning',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    // alert(response.Message);
                }
            }
        });
    }
});