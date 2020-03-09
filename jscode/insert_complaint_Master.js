$('#complaintMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
           
    var returnVal = $("#complaintMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);


        $.ajax({
            url: url + 'insertComplaints.php',
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
                    $('#complaintMasterForm').trigger('reset');
                    complaint.set(response.Data.complaintId, response.Data);
                      listcomplaint(complaint);

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
