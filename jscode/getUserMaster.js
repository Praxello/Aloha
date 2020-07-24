var users = new Map();
var user_details = {};
var  userId_np = null;
// var global_date = moment().format('YYYY-MM-DD');
const getAllUsers = (franchiseid) => {
    $.ajax({
        url: url + 'getAllUserMaster.php',
        type: 'POST',
        dataType: 'json',
        data:{franchiseid:franchiseid},
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    users.set(response.Data[i].userId, response.Data[i]);
                }
         
                listUsers(users);
            }
        }
    });
};

const listUsers = users => {
    $('#uTable').dataTable().fnDestroy();
    $('#userData').empty();
    var tblData = '',
    badge1;
    for (let k of users.keys()) {
        let user = users.get(k);
        badge = '';
        if (user.isActive == 1) {
            badge1 = '<td><span class="badge badge-success">active</span></td>';
        } else {
            badge1 = '<td><span class="badge badge-warning">inactive</span></td>';
        }
        tblData += '<tr><td>' + user.userId + '</td>';
        tblData += '<td>' + user.username + '</td>';
  
        tblData += '<td>' + user.mobile  + '</td>';
        tblData += '<td>' + user.addharId + '</td>';
        tblData += '<td>' + user.designation + '</td>';
        tblData += '<td>' + user.address + '</td>';
        tblData += '<td>' + user.branchName + '</td>';
        tblData += badge1;
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editUser(' + (k) + ')" title="Edit Users details"><i class="ik ik-edit text-blue"></i></a>';
        tblData += '<a href="#" class="ik edit"  onclick="inactivateUser(' + (k) + ')" title="Active/inactive User"><i class="ik ik-trash text-danger"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#userData').html(tblData);
    $('#uTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4,5,6] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllUsers(data.franchiseid);

const editUser = (userId) => {
    userId = userId.toString();
    user_details = users.get(userId);
    userId_np= userId;
    $('#newUser').hide();
    
    $('#editUserNew').load('../edit_user_profile.php');

 
};
var inactivateUser = userId => {
    userId = userId.toString();
    let user = users.get(userId);
    var msg = '',
        btn = '',
        msg1 = '';
    if (user.isActive == 1) {
        user.isActive = 0;
        msg = 'Do you really want to in activate this User?';
        btn = 'Deactivate Now';
        msg1 = 'User Deactvated';
    } else {
        user.isActive = 1;
        msg = 'Do you really want to  activate this User?';
        btn = 'Activate Now';
        msg1 = 'User Activated';
    }
    swal({
            title: "Are you sure?",
            text: msg,
            icon: "warning",
            buttons: ["Cancel", btn],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: url + 'userActivation.php',
                    type: 'POST',
                    data: {userId: userId},
                    dataType: 'json',
                    success: function(response) {
                        if (response.Responsecode == 200) {
                            users.set(userId, user);
                            listUsers(users);
                            swal({
                                text: msg1,
                                icon: "success"
                            });

                        }
                    }
                });
            }
        });
};

function gobackUser(){
    $('#newUser').show();
    $('#editUserNew').empty();
}