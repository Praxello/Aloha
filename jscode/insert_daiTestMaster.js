$('#testMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
           
    var returnVal = $("#testMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);


        $.ajax({
            url: url + 'insert_DaiTest_Master.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                    //  alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#cButton').click();
                    $('#testMasterForm').trigger('reset');
                    testes.set(response.Data.testId, response.Data);
                    listTest(testes);

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