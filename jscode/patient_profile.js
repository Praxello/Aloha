const loadPatientDetails = details => {
    $('#uname').html(details.firstName + ' ' + details.surname);
    $('#uemailId').html(details.email);
    $('#uphone').html(details.mobile1);
    $('#uadd').html(details.address + ' ' + details.city);
    $('#ucity').html(details.city);
    $('#uage').html(getAge(details.birthDate));
    $('#ugender').html(details.gender);
    $('#fname').val(details.firstName);
    $('#mname').val(details.middleName);
    $('#lname').val(details.surname);
    $('#mobile1').val(details.mobile1);
    $('#emailId').val(details.email);
    $('#landline').val(details.landline);
    $('#gender').val(details.gender).trigger('change');
    $('#bdate').val(details.birthDate);
    $('#height').val(details.height);
    $('#weight').val(details.weight);
    $('#occupation').val(details.occupation);
    $('#refferedId').val(details.referredby).trigger('change');
    $('#ecostrata').val(details.economicStrata).trigger('change');
    $('#patientId').val(details.patientId);
    //for open profile pictire in edit mode
    var src = "upload/patients/" + details.patientId + ".jpg";
    $('#userJpg').attr("src", src);
    $('#userPic').attr("src", src);
};
loadPatientDetails(patient_details);
getLumbarSpine(patient_details.patientId);
getNeckDisblity(patient_details.patientId);
getLowBackPain(patient_details.patientId);
getCervicalSpine(patient_details.patientId);