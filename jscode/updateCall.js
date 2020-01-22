function updateCall() {
    var returnVal = $("#callForm").valid();
    if (returnVal) {
        var fdata = {
            callId: up_callId,
            clientId: clientId,
            firstName: $('#firstName').val(),
            middleName: $('#middleName').val(),
            lastName: $('#lastName').val(),
            birthdate: $('#birthdate').val(),
            gender: $('#gender').val(),
            emailId: $('#emailId').val(),
            mobile: $('#mobile').val(),
            landline: $('#landline').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            country: $('#country').val(),
            zipcode: $('#zipcode').val(),
            nearbyarea: $('#nearbyarea').val(),
            reference: $('#reference').val(),
            calldatetime: $('#calldatetime').val(),
            branchId: $('#branchId').val(),
            userId: $('#userId').val(),
            disease: $('#desease').val(),
            appointmentDate: $('#appointmentDate').val(),
            remarks: $('#remarks').val(),
            followup: $('#followup').val(),
            follwupdate: $('#follwupdate').val(),
            attendedBy: data.userId
        };
        $.ajax({
            url: url + 'updateCallcenter.php',
            type: 'POST',
            data: fdata,
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
                    $('#fullwindowModal').modal('hide');
                    $('#callForm').trigger('reset');
                    calls.set(response.Data.callId, response.Data);
                    console.log(calls);
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
}