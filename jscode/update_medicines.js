$('#medicineMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#medicineMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('medicineId',medicineId_ap);
        console.log(medicineId_ap);
        $.ajax({
            url: url + 'updateMedicinesMaster.php',
            type: 'POST',
            data: fData,
            cache: false,       
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                  alert(response.Responsecode); 
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#medicineNew').empty();
                    $('#addMedicines').show();
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