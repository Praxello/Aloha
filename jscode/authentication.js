$('#signin').on('submit', function(event) {
    event.preventDefault();
    var loginData = {
        userId: $('#userId').val(),
        passwrd: $('#passwrd').val(),
        branchId: $('#branchId').val()
    };
    $.ajax({
        url: url + 'authenticate.php',
        type: 'POST',
        data: loginData,
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                window.location.href = 'createSession.php?userId=' + loginData.userId + '&branchId=' + loginData.branchId + '&username=' + response.Data.username;
            } else {
                $('.message').show();
            }
        },
        complete: function(response) {
            $("#wait").css("display", "none");
        }
    });
});