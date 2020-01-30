const loadUserDetails = details => {

    $('#username').val(details.username);
    $('#password').val(details.password); 
    $('#mobile').val(details.mobile);
    $('#addharId').val(details.addharId);
    $('#usertype').val(details.usertype);
    $('#designation').val(details.designation);
    $('#address').val(details.address);
    $('#firmName').val(details.firmName);
    $('#sign').val(details.sign);
};
loadUserDetails(user_details);
