$('#callForm').on('submit', function(e) {
    e.preventDefault();
    var returnVal = $("#callForm").valid();
    if (returnVal) {
        var fdata = new FormData(this);
        var folloDate = $('#follwupdate').val();
        folloDate = moment(folloDate).format("YYYY-MM-DD HH:mm:ss");
        fdata.append('follwupdate', folloDate);
        fdata.append('attendedBy', data.userId);
        $.ajax({
            url: url + 'addCallcenter.php',
            type: 'POST',
            data: fdata,
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
                    $('.select2').val('').trigger('change');
                    $('#callForm').trigger('reset');
                    $('#fullwindowModal').modal('hide');
                    calls.set(response.Data.callId, response.Data);

                    listCalls(calls);
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