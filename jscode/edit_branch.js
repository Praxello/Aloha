var loadBranchDetails = details => {

    $('#branchName').val(details.branchName);
    $('#latitude').val(details.latitude);
    $('#longitude').val(details.longitude);
    $('#mapURL').val(details.mapURL);
    $('#mobile1').val(details.mobile1);
    $('#mobile2').val(details.mobile2);
    $('#countrye').val(details.country).trigger('change');
    $('#statee').val(details.state).trigger('change');
    $('#branchAddress').val(details.branchAddress);

};


$('#countrye').html(countryList);

$('#countrye').select2({
placeholder:'select',

});

loadBranchDetails(branch_details);
