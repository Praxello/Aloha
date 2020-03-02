var users = new Map();
var user_details = {};
var  userId_np = null;
// var global_date = moment().format('YYYY-MM-DD');
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
getAllUsers();
function listUsers(users) {
    var dropdownList = '<option></option>';
    for (let k of users.keys()) {
        var user = users.get(k);
        dropdownList += '<option value="' + k + '">' + user.visitDate + '</option>';
    }
 
}

// function fill_concent(visitDate) {
//     if (concent.has(visitDate)) {
//         var user = concent.get(visitDate);
//         document.getElementById('deseaseNew').value = user.deseaseNew;
//         document.getElementById('sinceDays').value = user.sinceDays;
//         document.getElementById('relativeName').value = user.relativeName;
//         document.getElementById('medicalTreatment').value = user.medicalTreatment;
//         document.getElementById('branchName').value = user.hospitalCenterName;
//         document.getElementById('treatmentName').value = user.treatmentName;
//     }
// }