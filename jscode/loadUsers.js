function loadUsers(branchId) {
    var dropdownList = '<option></option>';
    for (let k of users.keys()) {
        var user = users.get(k);
        if (user.branchId == branchId)
            dropdownList += '<option value="' + user.userId + '">' + user.username + '</option>';
    }
    console.log(dropdownList);
    $('#userId').html(dropdownList);
    $("#userId").select2({
        placeholder: 'Select User',
        allowClear: true
    });
}