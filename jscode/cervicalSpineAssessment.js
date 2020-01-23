$('#cervicalSpineForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#cervicalSpineForm").valid();
    if (returnVal) {

    
       
    

        var fun = $('#cerfunDisabilityScore').val();
  
  





       
        $.ajax({
            url: url + 'insertCervicalSpine.php',
            type: 'POST',
            data: {
                patientId: global_patientId,
                visitDate: global_date,
               
            
                cerfunDisabilityScore: fun
            
            

            },
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

