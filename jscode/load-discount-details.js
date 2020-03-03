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
mapDiscounts(discounts);

function mapDiscounts(discounts) {
    var dropdownList = '<option></option>';
    for (let k of discounts.keys()) {
        let discount = discounts.get(k);
        dropdownList += '<option value="' + k + '">' + discount.discountType + ' (' + discount.discount + '%)</option>';
    }
    $('#discountType').html(dropdownList);
    $("#discountType").select2({
        placeholder: 'Select discount type',
        allowClear: true
    });
}

function listDetails(details) {
    $('#packageTest').dataTable().fnDestroy();
    $('#packageTestData').empty();
    var tblData = '';
    var count = details.length;
    for (var i = 0; i < count; i++) {
        tblData += '<tr><td>' + (i + 1) + '</td><td>' + details[i].discountType + '</td>';
        tblData += '<td>' + details[i].discount + '</td>';
        tblData += '<td><div class="table-actions">';
        tblData += '<a href="#" onclick="removeTest(' + details[i].classId + ')" title="Remove Discount"><i class="ik ik-trash"></i></a>';
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




function addTest() {
    $("#addPackageDetails").validate({
        ignore: [],
        rules: {
            discountType: {
                required: true,
            }
        },
        messages: {
            discountType: {
                required: "Select from list"
            }
        }
    });
    var returnVal = $("#addPackageDetails").valid();
    if (returnVal) {
        const details = {
            discountId: $('#discountType').val(),
            classId: udiscount
        };
        $.ajax({
            url: url + 'addDiscountmap.php',
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
                    let package = discount.get(udiscount);
                    package.details = response.Data.details;
                    discount.set(udiscount, package);
                    listDetails(package.details);
                    $('#discountType').val('').trigger('change');
                }
            }
        });
    }
}

function removeTest(classId) {
    swal({
            title: "Are you sure?",
            text: 'To remove procedures from this package',
            icon: "warning",
            buttons: ["Cancel", 'Remove Now'],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                classId = classId.toString();
                $.ajax({
                    url: url + 'removePackageTest.php',
                    type: 'POST',
                    data: { Id: classId },
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
                            package_tests.delete(classId);
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