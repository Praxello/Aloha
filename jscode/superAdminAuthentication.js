$('#signin').on('submit', function(event) {
    event.preventDefault();
    var loginData = {
        userId: $('#userId').val(),
        passwrd: $('#passwrd').val(),
        branchId: $('#branchId').val()
    };
    $.ajax({
        url: url + 'superAdminAuthentictn.php',
        type: 'POST',
        data: loginData,
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                window.location.href = 'createSuperAdminSession.php?userId=' + loginData.userId + '&branchId=' + loginData.branchId + '&username=' + response.Data.username + '&role=' + response.Data.usertype + '&roleName=' + response.Data.role;
            } else {
                $('.message').show();
            }
        },
        complete: function() {
            $("#wait").css("display", "none");
        }
    });
});