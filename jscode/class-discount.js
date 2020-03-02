var discount = new Map();
var udiscount = null;

function getDiscounts() {
    $.ajax({
        url: url + 'getClasses.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        discount.set(response.Data[i].Id, response.Data[i]);
                    }
                }
            }
            listDiscount(discount);
        }
    });
}
getDiscounts();

const listDiscount = discount => {
    $('#pTable').dataTable().fnDestroy();
    $('#packageData').empty();
    var tblData = '';
    var i = 0;
    for (let k of discount.keys()) {
        let package = discount.get(k);
        tblData += '<tr><td>' + (++i) + '</td><td>' + package.ClassType + '</td>';
        tblData += '<td>' + package.branchName + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" class="ik edit"  onclick="editPackage(' + (k) + ')" title="View  Details"><i class="fas fa-window-restore text-purple"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#packageData').html(tblData);
    $('#pTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};

const editPackage = discountId => {
    discountId = discountId.toString();
    udiscount = discountId;
    $('#package').hide();
    $('#loadPackage').load('edit-discount.php');
};

var addPackage = () => {
    $('#demoModal').modal('show');
};


const goback = () => {
    $('#loadPackage').empty();
    $('#package').show();
};

$(document).ready(function() {
    mapBranches();
    $("#branchId").select2({
        placeholder: 'Select branch',
        allowClear: true,
        dropdownParent: $('#demoModal')
    });
});

function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branchId').html(dropdownList);
}
var discounts = new Map();