
var getAllConsentDetails = (u_patientId) => {
    $.ajax({
       url:url+'getConsentMaster.php',
       type:'POST',
       data:{patientId:u_patientId},
       dataType:'json',
       success:function(response){
           console.log(response);
           document.getElementById('deseaseNew').value=response.Data.deseaseNew;
           document.getElementById('sinceDays').value=response.Data.sinceDays;
           document.getElementById('relativeName').value=response.Data.relativeName;
           document.getElementById('medicalTreatment').value=response.Data.medicalTreatment;
           document.getElementById('treatmentName').value=response.Data.treatmentName;
           document.getElementById('hospitalCenterName').value=response.Data.hospitalCenterName;
           
       }
    });
};


getAllConsentDetails(u_patientId);


