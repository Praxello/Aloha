console.log(patient_details);
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

};
loadPatientDetails(patient_details);