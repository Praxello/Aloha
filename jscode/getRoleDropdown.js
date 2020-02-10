
var userroleList=null;
function mapRole() {
    var dropdownList = '<option></option>';
    for (let k of userRole.keys()) {
        console.log(userRole.get(k));
        dropdownList += '<option value='+k+'>' + userRole.get(k) + '</option>';
    }
   
    $('#roleId').html(dropdownList);
    userroleList = dropdownList;
    console.log(userroleList)
}
$(document).ready(function() {
     mapRole();
    $("#roleId").select2({
        placeholder: 'Select Role',
        allowClear: true,
        tags:true,
        dropdownParent: $('#userMasterForm')
    });
});

// get table Id
//'<option value='+k+'>' 