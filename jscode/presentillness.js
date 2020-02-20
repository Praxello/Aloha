
$(document).on('submit','#presentillnessform',function(e){
// $('#presentillnessform').on('submit', function(e) {
 

    e.preventDefault();
    var returnVal = $("#presentillnessform").valid();
    if (returnVal) {
    
        var fData = new FormData(this);
        fData.append('patientId',global_patientId);
        fData.append('visitDate',global_date)
         console.log(global_patientId);
         console.log(global_date);

        $.ajax({
            url: url + 'insertpresentIllness.php',
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
                    $('#presentillnessform').trigger('reset');
                    presentill.set(response.Data.onAssesmentId, response.Data);
                showPresentillness(presentill);

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
