var loadBranchDetails = details => {

    $('#branchName').val(details.branchName);
    $('#latitude').val(details.latitude);
    $('#longitude').val(details.longitude);
    $('#mapURL').val(details.mapURL);
    $('#mobile1').val(details.mobile1);
    $('#mobile2').val(details.mobile2);
    $('#landline1').val(details.landline1);
    $('#landline2').val(details.landline2);
    $('#fax').val(details.fax);
    $('#branchAddress').val(details.branchAddress);

};
loadBranchDetails(branch_details);
