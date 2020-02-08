var users = new Map();
var user_details = {};
var  userId_np = null;
var global_date = moment().format('YYYY-MM-DD');
const getAllUsers = () => {
    $.ajax({
        url: url + 'getAllUserMaster.php',
        type: 'POST',
        dataType: 'json',
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

const listUsers = branches => {
    $('#uTable').dataTable().fnDestroy();
    $('#userData').empty();
    var tblData = '';
    for (let k of users.keys()) {
        let user = users.get(k);

        tblData += '<tr><td>' + user.userId + '</td>';
        tblData += '<td>' + user.username + '</td>';
  
        tblData += '<td>' + user.mobile  + '</td>';
        tblData += '<td>' + user.addharId + '</td>';
        tblData += '<td>' + user.designation + '</td>';
        tblData += '<td>' + user.address + '</td>';
        
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editUser(' + (k) + ')" title="Edit Users details"><i class="ik ik-edit text-blue"></i></a>';
    
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
getAllUsers();

const editUser = (userId) => {
    userId = userId.toString();
    user_details = users.get(userId);
    userId_np= userId;
    $('#newUser').hide();
    $('#editUserNew').load('edit_user_profile.php');

 
};

function gobackUser(){
    $('#newUser').show();
    $('#editUserNew').empty();
}