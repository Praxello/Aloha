$('#userMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#userMasterForm").valid();
    if (returnVal) {
    
        var fData = new FormData(this);


        $.ajax({
            url: url + 'insert_userMaster.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                     alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#cButton').click();
                    users.set(response.Data.userId, response.Data);
                    listUsers(users);

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