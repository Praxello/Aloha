var patients = new Map();
const getAllPatients = () => {
    $.ajax({
        url: url + 'getAllPatients.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    patients.set(response.Data[i].patientId, response.Data[i]);
                }
                listPatients(patients);
            }
        }
    });
};

const listPatients = patients => {
    $('#patients').dataTable().fnDestroy();
    $('#patientData').empty();
    var tblData = '';
    for (let k of patients.keys()) {
        let patient = patients.get(k);

        var editData = '<a href="#" onclick="editProduct(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2"></i></a>';
        tblData += '<tr><td><img src="' + url + 'upload/' + products.productId + '.jpg" class="table-user-thumb" alt="Image"></td>';
        tblData += '<td>' + products.productTitle + '</td>';
        tblData += '<td>' + products.price + '</td>';
        tblData += '<td>' + products.GST + '</td>';
        tblData += '<td><a href="' + products.videoUrl + '" target="_blank">' + products.videoUrl + '</a></td>';
        tblData += '<td>' + products.details + '</td>';
        tblData += activeLable;
        tblData += '<td><div class="table-actions">';
        tblData += editData;
        tblData += '<a href="#" class="list-delete" onclick="removeProduct(' + (k) + ')" title="Active/Inactive product"><i class="ik ik-check-circle"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#patientData').html(tblData);
    $('#products').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};