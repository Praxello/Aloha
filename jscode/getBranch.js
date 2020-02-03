var branch = new Map();


getBranch();


function getBranch() {
    $.ajax({
        url: url + 'getAllBranch.php',
        type: 'POST',
        dataType: 'json',
        async: false,
        success: function(response) {
            if (response.Responsecode == 200) {
                var count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    branch.set(response.Data[i].branchId, response.Data[i].branchName);
                }
            }
        }
    });
}








