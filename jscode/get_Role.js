var userRole = new Map();

function getUserRole() {
    $.ajax({
        url: url + 'getUserRoleType.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        userRole.set(response.Data[i].roleId, response.Data[i].role);
                    }
                }
            }
        }
    });
}
getUserRole();