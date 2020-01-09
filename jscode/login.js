function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branchId').html(dropdownList);
}
$(document).ready(function() {
    mapBranches();
    $("#branchId").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
});

function loadUsers(branchId) {
    console.log(branchId);
    var dropdownList = '<option></option>';
    for (let k of users.keys()) {
        var user = users.get(k);
        console.log(user);
        if (user.branchId == branchId)
            dropdownList += '<option value="' + user.userId + '">' + user.username + '</option>';
    }
    $('#userId').html(dropdownList);
    $("#userId").select2({
        placeholder: 'Select User',
        allowClear: true
    });
}