const loadUserDetails = details => {

    $('#username').val(details.username);
    $('#password').val(details.password); 
    $('#conpassword1').val(details.conpassword); 
    $('#mobile').val(details.mobile);
    $('#addharId').val(details.addharId);
    $('#usertype').val(details.usertype);
    $('#designation').val(details.designation);
    $('#address').val(details.address);
    $('#firmName').val(details.firmName);
    $('#branchIde').val(details.branchIde).trigger('change');
    // $('#sign').val(details.sign);

    if(details.active == 1){
        $('#active').prop('checked',true);
    }else{
        $('#inactive').prop('checked',true); 
    }

    $('#branchIde').html(branchList);
    console.log(branchList);
$('.branchIde').select2({
    placeholder:'select',
    dropdownParent: $('#userMasterForm'),
   
});

};
loadUserDetails(user_details);
