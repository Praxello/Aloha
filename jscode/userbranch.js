var branchList=null;
function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        let b = branch.get(k);
        dropdownList += '<option value="' + k + '">' +b.branchName  + '</option>';
    }
    $('#branchId').html(dropdownList);
    branchList=dropdownList;

}
$(document).ready(function() {
    mapBranches();
    $("#branchId").select2({
        placeholder: 'Select branch',
        allowClear: true,
    });
});