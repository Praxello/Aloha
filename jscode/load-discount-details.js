function show_details(discountId) {
    let package = discount.get(discountId);
    console.log(package);
    $('#pName').html(package.ClassType);
    $('#pCost').html(package.branchName);
    $('#disTitle').val(package.ClassType);
    $('#branch').val(package.branchId).trigger('change');
    if (package.details != null) {
        listDetails(package.details);
    }
}
Branches();
$("#branch").select2({
    placeholder: 'Select branch',
    allowClear: true
});
show_details(udiscount);


function listDetails(details) {
    $('#packageTest').dataTable().fnDestroy();
    $('#packageTestData').empty();
    var tblData = '';
    var count = details.length;
    for (var i = 0; i < count; i++) {
        tblData += '<tr><td>' + (i + 1) + '</td><td>' + details[i].discountType + '</td>';
        tblData += '<td>' + details[i].discount + '</td>';
        tblData += '<td><div class="table-actions">';
        tblData += '<a href="#" onclick="removeBranchPackage(' + details[i].classId + ')" title="Remove Branch"><i class="ik ik-trash"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#packageTestData').html(tblData);
    $('#packageTest').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
}


function addPackagetoBranch() {
    $("#addpackagebranch").validate({
        ignore: [],
        rules: {
            branchId: {
                required: true,
            },
            packageDiscount: {
                required: true,
                number: true,
                min: 0,
                max: 99
            },
        },
        messages: {
            branchId: {
                required: "Select from list"
            },
            packageDiscount: {
                required: "Please enter quota",
                number: 'Enter only digits',
                min: 'Minimum discount is 0%',
                max: 'Maximum discount can not exceed 99%'
            },
        }
    });
    var returnVal = $("#addpackagebranch").valid();
    if (returnVal) {
        const details = {
            branchId: $('#branchId').val(),
            packageDiscount: $('#packageDiscount').val(),
            packageId: packageId_u
        };
        $.ajax({
            url: url + 'addPackage-branchMapping.php',
            type: 'POST',
            data: details,
            dataType: 'json',
            success: function(response) {
                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: response.Message,
                    button: false,
                    timer: 1500
                });
                if (response.Responsecode == 200) {
                    package_branches.set(response.Data.mapId, response.Data);
                    $('#branchId').val('').trigger('change');
                    $('#packageDiscount').val('');
                }
                list_package_branches(package_branches);
            }
        });
    }
}


function addTest() {
    $("#addPackageDetails").validate({
        ignore: [],
        rules: {
            test: {
                required: true,
            },
            packageQuota: {
                required: true,
                number: true,
                min: 0
            },
        },
        messages: {
            test: {
                required: "Select from list"
            },
            packageQuota: {
                required: "Please enter quota",
                number: 'Enter only digits',
                min: 'Enter valid quota'
            },
        }
    });
    var returnVal = $("#addPackageDetails").valid();
    if (returnVal) {
        const details = {
            testId: $('#test').val(),
            quota: $('#packageQuota').val(),
            packageId: packageId_u
        };
        $.ajax({
            url: url + 'addPackage-test.php',
            type: 'POST',
            data: details,
            dataType: 'json',
            success: function(response) {
                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: response.Message,
                    button: false,
                    timer: 1500
                });
                if (response.Responsecode == 200) {
                    package_tests.set(response.Data.itemId, response.Data);
                    $('#test').val('').trigger('change');
                    $('#packageQuota').val('');
                }
                list_package_test(package_tests);
            }
        });
    }
}

function removeTest(testId) {
    swal({
            title: "Are you sure?",
            text: 'To remove procedures from this package',
            icon: "warning",
            buttons: ["Cancel", 'Remove Now'],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                testId = testId.toString();
                $.ajax({
                    url: url + 'removePackageTest.php',
                    type: 'POST',
                    data: { itemId: testId },
                    dataType: 'json',
                    success: function(response) {
                        swal({
                            position: 'top-end',
                            icon: 'success',
                            title: response.Message,
                            button: false,
                            timer: 1500
                        });
                        if (response.Responsecode == 200) {
                            package_tests.delete(testId);
                        }
                        list_package_test(package_tests);
                    }
                });
            }
        });
}

function Branches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branch').html(dropdownList);
}