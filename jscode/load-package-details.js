var package_branches = new Map();

function show_details(packageId) {
    let package = packages.get(packageId);
    console.log(package);
    $('#pName').html(package.title);
    $('#packageName').val(package.title);
    $('#pCost').html(parseFloat(package.cost).toLocaleString());
    $('#packageCost').val(package.cost);
    $('#pDetails').html(package.details);
    $('#packageDetails').val(package.details);
    if (package.isActive == 1)
        package.isActive = 'active';
    else
        package.isActive = 'inactive';
    $('#pActive').html(package.isActive);
}
show_details(packageId_u);
show_package_barnch(packageId_u);

function show_package_barnch(packageId) {
    $.ajax({
        url: url + 'addPackage-branchMapping.php',
        type: 'POST',
        data: { packageId: packageId },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                package_branches.set(response.Data[i].mapId, response.Data[i]);
            }
        }
    });
}