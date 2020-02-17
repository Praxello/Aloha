var branchList=null;
function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branchId').html(dropdownList);
    branchList=dropdownList;

}
$(document).ready(function() {
    mapBranches();
    $("#branchId").select2({
        placeholder: 'Select branch',
        allowClear: true,
        // dropdownParent: $('#userModal')
    });
});