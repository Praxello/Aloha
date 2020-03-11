var loadUserDetails = details => {
    console.log(details);
    $('#username').val(details.username);
    $('#upassword').val(details.upassword); 
    $('#mobile').val(details.mobile);
    $('#addharId').val(details.addharId);
    $('#designation').val(details.designation);
    $('#branchIde').val(details.branchId).trigger('change');
    $('#roleIde').val(details.usertype).trigger('change');
    $('#sign').val(details.sign);
    $('#address').val(details.address);
    $('#firmName').val(details.firmName);
  


    if(details.isActive == 1){
        $('#active1').prop('checked',true);
    }else{
        $('#inactive1').prop('checked',true); 
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
