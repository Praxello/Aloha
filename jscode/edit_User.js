var loadUserDetails = details => {
    console.log(details);
    $('#username').val(details.username);
    $('#password').val(details.password); 
    $('#mobile').val(details.mobile);
    $('#addharId').val(details.addharId);
    $('#designation').val(details.designation);
    $('#branchIde').val(details.branchId).trigger('change');
    $('#roleIde').val(details.usertype).trigger('change');
    $('#sign').val(details.sign);
    $('#address').val(details.address);
    $('#firmName').val(details.firmName);
  


    if(details.active == 1){
        $('#active').prop('checked',true);
    }else{
        $('#inactive').prop('checked',true); 
    }
};
console.log(userroleList);
$('#roleIde').html(userroleList);
$('#roleIde').select2({
placeholder:'select',
autoClear:true
});
$('#branchIde').html(branchList);
$('#branchIde').select2({
    placeholder:'select'
});
loadUserDetails(user_details);
