$('#medicineMasterForm').on('submit', function(e) {
    e.preventDefault();
    var returnVal = $("#medicineMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('suserid',data.userId);
        fData.append('susername',data.username);
        $.ajax({
            url: url + 'insert_Medicines.php',
            type: 'POST',
            data: fData,
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
                    $('#cButton').click();
                    $('#medicineMasterForm').trigger('reset');
                    $('.select2').val('').trigger('change');
                    medicines.set(response.Data.medicineId, response.Data);
                   listMedicines(medicines);

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
