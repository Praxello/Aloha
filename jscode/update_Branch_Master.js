$('#branchMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#branchMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('branchId',branchId_ap);
        console.log(branchId_ap);
        $.ajax({
            url: url + 'updateBranchMaster.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                    // alert(response.Message);
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#editbranchNew').empty();
                    $('#newData').show();
                    users.set(response.Data.userId, response.Data);
                    listUsers(users);
                    branches.set(response.Data.branchId, response.Data); 
                    listBranches(branches);
                } else {
                    swal({
                        position: 'top-end',
                        icon: 'warning',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    // alert(response.Message);
                }
            }
        });
    }
});