$('#dosageMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#dosageMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('dosageId',dosageId_ap);
        console.log(dosageId_ap);
        $.ajax({
            url: url + 'updateDosageMaster.php',
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
                    $('#doseNew').empty();
                    $('#dosRecord').show();
                    dosageM.set(response.Data.dosageId, response.Data);
                    listDosage(dosageM);
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