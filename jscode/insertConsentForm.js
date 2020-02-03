// $('#consentMasterForm').on('click', function(e) {
//      //console.log(e);
//     e.preventDefault();
   
    
    //     var fData = new FormData(this);


    //     $.ajax({
    //         url: url + 'insert_consent_form.php',
    //         type: 'POST',
    //         data: fData,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         dataType: 'json',
    //         success: function(response) {
    //             console.log(response);
    //             if (response.Responsecode == 200) {
    //                  alert(response.Message);
    //                 swal({
    //                     position: 'top-end',
    //                     icon: 'success',
    //                     title: response.Message,
    //                     button: false,
    //                     timer: 1500
    //                 });
                 

    //             } else {
    //                 swal({
    //                     position: 'top-end',
    //                     icon: 'warning',
    //                     title: response.Message,
    //                     button: false,
    //                     timer: 1500
    //                 });
               
    //             }
    //         }
    //     });
    // });
function demo(u_patientId){
    let patient = appointments.get(u_patientId);
    console.log("hdhhhhh")
    console.log(patient);
    var p=patient.firstName +'  ' +patient.surname
    document.getElementById('pname1').value=p;
}
demo(u_patientId);
    function fun(){
        console.log("hii");

        var pname1 = document.getElementById('pname1').value;
        var deseaseNew = document.getElementById('deseaseNew').value;
        var sinceDays = document.getElementById('sinceDays').value;
        var relativeName = document.getElementById('relativeName').value;
        
        var treatmentName = document.getElementById('treatmentName').value;
        var medicalTreatment = document.getElementById('medicalTreatment').value;
        var hospitalCenterName = document.getElementById('hospitalCenterName').value;
        console.log(u_patientId);


    
        $.ajax({
            url: url + 'insert_consent_form.php',
            type: 'POST',
            data: {
                u_patientId:u_patientId,
                 pname1 :pname1,                                                                                                                                                                                
                deseaseNew:deseaseNew,
                sinceDays :sinceDays,
                relativeName :relativeName,
                treatmentName :treatmentName,
                medicalTreatment :medicalTreatment,
                hospitalCenterName :hospitalCenterName
            },
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                     alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#pname1').empty();


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