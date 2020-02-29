const getCollection = (fromDate, uptoDate, branch) => {
    $.ajax({
        url: url + 'getCollection.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate, branchId: branch },
        success: function(response) {
            $('#collectionT').dataTable().fnDestroy();
            $('#collectionD').empty();
            var tblData = '',
                badge = '',
                amtO = 0,
                amtR = 0,
                amtT = 0,
                amtP = 0;
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    let collect = response.Data[i];
                    if (collect.isPackage == 0) {
                        badge = '<span class="badge badge-success">OPD</span>';
                    } else {
                        badge = '<span class="badge badge-primary">Package</span>';
                    }
                    amtO = amtO + parseFloat(collect.amount);
                    amtR = amtR + parseFloat(collect.received);
                    amtP = amtP + parseFloat(collect.pending);
                    amtT = amtT + parseFloat(collect.total);
                    tblData += '<tr><td>' + collect.recieptId + ' </td><td>' + collect.visitDate + ' </td><td>' + collect.firstName + ' ' + collect.surname + '</td>';
                    tblData += '<td>' + collect.username + '</td>';
                    tblData += '<td>' + collect.discountType + '</td>';
                    tblData += '<td>' + badge + '</td>';
                    tblData += '<td>' + parseFloat(collect.amount).toLocaleString('en-IN', { style: 'currency', currency: 'INR' }) + '</td>';
                    tblData += '<td>' + collect.paymentMode + '</td>';
                    tblData += '<td>' + collect.receivedBy + '</td>';
                    tblData += '<td>' + collect.createdAt + '</td>';
                    tblData += '<td><div class="table-actions" style="text-align: left;">';
                    tblData += '<a href="#" onclick="printReciept(' + (collect.paymentId) + ')" title="print reciept"><i class="fa fa-download text-blue"></i></a>';
                    tblData += '</div></td></tr>';
                }
            }
            $('#collectionD').html(tblData);
            $('#amtO').html(amtO.toLocaleString('en-IN', { style: 'currency', currency: 'INR' }));
            $('#collectionT').dataTable({
                searching: true,
                retrieve: true,
                bPaginate: $('tbody tr').length > 10,
                order: [],
                columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] }],
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf'],
                destroy: true
            });
        }
    });
};


$('#searchCollection').on('click', function(e) {
    e.preventDefault();
    $("#callRegister").validate({
        ignore: [],
        rules: {
            uptoDate: {
                required: true,
            },
            fromDate: {
                required: true
            },
        },
        messages: {
            fromDate: {
                required: "Select from Date"
            },
            uptoDate: {
                required: "Select upto Date"
            },
        }
    });
    var returnVal = $("#callRegister").valid();
    if (returnVal) {
        var branch = null;
        var fromDate = moment($('#fromDate').val()).format('YYYY-MM-DD');
        var uptoDate = moment($('#uptoDate').val()).format('YYYY-MM-DD');
        if ($('#branch').val() != '') {
            branch = $('#branch').val();
        }
        getCollection(fromDate, uptoDate, branch);
    }
});

function printReciept(paymentId) {
    var link = 'payment-reciept.php?paymentId=' + paymentId;
    window.open(link, '_blank');
}
getCollection(data.today, data.today);

function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branch').html(dropdownList);
}
$(document).ready(function() {
    mapBranches();
    $("#branch").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
});