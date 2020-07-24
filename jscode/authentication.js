$('#signin').on('submit', function(event) {
    event.preventDefault();
    var loginData = {
        username: $('#username').val(),
        passwrd: $('#passwrd').val()
    };
    $.ajax({
        url: url + 'authenticate.php',
        type: 'POST',
        data: loginData,
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                window.location.href = 'createSession.php?userId=' + response.Data.userId + '&branchId=' + response.Data.branchId + '&username=' + response.Data.username + '&role=' + response.Data.usertype + '&roleName=' + response.Data.role;
            } else {
                $('.message').show();
            }
        },
        complete: function() {
            $("#wait").css("display", "none");
        }
    });
});