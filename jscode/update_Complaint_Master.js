$('#complaintMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#complaintMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('complaintId',complaintId_ap);
        console.log(complaintId_ap);
        $.ajax({
            url: url + 'updateComplaints.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                    // alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#complaintNew').empty();
                    $('#complaintsData').show();
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