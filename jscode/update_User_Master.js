$('#userMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#userMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        console.log(fData);
        fData.append('userId',userId_np);
   
   

        $.ajax({
            url: url + 'updateUserMaster.php',
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
                    $('#editUserNew').empty();
                    $('#newUser').show();
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
                    // alert(response.Message);
                }
            }
        });
    }
});