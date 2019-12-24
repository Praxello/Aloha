$('#patientform').on('submit', function(e) {
    e.preventDefault();
    console.log('hello');
    var returnVal = $("#patientform").valid();
    console.log(returnVal);
    if (returnVal) {
        var birthDate = moment($('#dropper-max-year').val()).format('YYYY-MM-DD');
        var fData = new FormData(this);
        fData.append('birthDate', birthDate);
        $.ajax({
            url: url + 'addPatient.php',
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
                    patients.set(response.Data.patientId, response.Data);
                    listPatients(patients);

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