var neckDisiblity = new Map();
var neck_details = {};
// var patientId_ap = null;
const getNeckDisblity = (patientId) => {
    $.ajax({
        url: url + 'getNeckDisblity.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: patientId },
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    neckDisiblity.set(response.Data[i].ndisabilityId, response.Data[i]);
                }
                showNeckDisiblity(neckDisiblity);
            }
        }
    });
};

const showNeckDisiblity = neckDisiblity => {
    $('#nTable').dataTable().fnDestroy();
    $('#neckData').empty();
    var tblData = '';
    for (let k of neckDisiblity.keys()) {
        let neck = neckDisiblity.get(k);

        tblData += '<tr><td>' + neck.visitDate + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editneck(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#neckData').html(tblData);
    $('#nTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};


const editneck = (neckId) => {
    neckId = neckId.toString();
    neck_details = neckDisiblity.get(neckId);
    console.log(neck_details);
};