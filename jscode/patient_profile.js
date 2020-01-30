const loadPatientDetails = details => {
    $('#uname').html(details.firstName + ' ' + details.surname);
    $('#uemailId').html(details.email);
    $('#uphone').html(details.mobile1);
    $('#uadd').html(details.address + ' ' + details.city);
    $('#ucity').html(details.city);
    $('#uage').html(getAge(details.birthDate));
    $('#ugender').html(details.gender);

    $('#firstName').val(details.firstName);
    $('#middleName').val(details.middleName);
    $('#surname').val(details.surname);
    $('#maritalstatus').val(details.maritalstatus).trigger('change');;
    $('#religion').val(details.religion);
    // $('#country').val(details.country);
    
	$('#country option:selected').text()
    $('#state').val(details.state);
    $('#city').val(details.city);
    $('#pincode').val(details.pincode);
    $('#address1').val(details.address);
    $('#lastVisitDate').val(details.lastVisitDate);
    $('#nextVisitDate').val(details.nextVisitDate);
    $('#firstVisitDate').val(details.firstVisitDate);

    if (details.alcohol == 1)
        $('#alcohol').attr("checked", true);
    if (details.tobacco == 1)
        $('#tobacco').attr("checked", true);
    if (details.diabetes == 1)
        $('#diabetes').attr("checked", true);
    if (details.smoking == 1)
        $('#smoking').attr("checked", true);
    if (details.HTN == 1)
        $('#HTN').attr("checked", true);
    if (details.cholestrol == 1)
        $('#cholestrol').attr("checked", true);
       
     if (details. hardDrink == 1)
        $('#hardDrink').attr("checked", true);
    $('#mobile1').val(details.mobile1);
    $('#email').val(details.email);
    $('#landline').val(details.landline);
    $('#gender').val(details.gender);
    $('#birthDate').val(details.birthDate);

    $('#height').val(details.height);
    $('#weight').val(details.weight);
    $('#occupation').val(details.occupation);
    $('#referredby').val(details.referredby);
    $('#economicStrata').val(details.economicStrata);
    $('#patientId').val(details.patientId);
    //for open profile pictire in edit mode
    var src = "upload/patients/" + details.patientId + ".jpg";
    $('#userJpg').attr("src", src);
    $('#userPic').attr("src", src);
};
loadPatientDetails(patient_details);
getPatientAppointments(patient_details.patientId);