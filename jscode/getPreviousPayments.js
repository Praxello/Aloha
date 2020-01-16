function getPreviousPayments(patientId) {
    $('#tPayment').dataTable().fnDestroy();
    $('#tbPayment').empty();
    var tblData = '',
        total = 0;
    $.ajax({
        url: url + 'getPreviousTransactions.php',
        type: 'POST',
        data: { patientId: patientId },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        total = total + parseFloat(response.Data[i].total);
                        tblData += '<tr><td>' + response.Data[i].paymentId + '</td>';
                        tblData += '<td>' + response.Data[i].username + '</td>';
                        tblData += '<td>' + response.Data[i].billDetails + '</td>';
                        tblData += '<td>' + response.Data[i].total + '</td>';
                        tblData += '<td>' + response.Data[i].pending + '</td>';
                        tblData += '<td><div class="table-actions">';
                        tblData += '<a href="#" onclick="editPatient(' + response.Data[i].paymentId + ')" title="Edit product details"><i class="ik ik-edit-2"></i></a>';
                        tblData += '</div></td></tr>';
                    }
                }
                $('#totalP').html(total.toLocaleString());
                $('#tbPayment').html(tblData);
                $('#tPayment').dataTable({
                    searching: true,
                    retrieve: true,
                    bPaginate: $('tbody tr').length > 10,
                    order: [],
                    columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5] }],
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf'],
                    destroy: true
                });
            }
        }
    });
}