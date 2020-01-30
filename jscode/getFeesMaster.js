var feess = new Map();
var fees_details = {};
var  feesId_np = {};

var global_date = moment().format('YYYY-MM-DD');
const getAllFees = () => {
    $.ajax({
        url: url + 'getAllFeesMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    feess.set(response.Data[i].feesId, response.Data[i]);
                }
         
                listFees(feess);
            }
        }
    });
};

const listFees = feeses => {
    $('#fTable').dataTable().fnDestroy();
    $('#feesData').empty();
    var tblData = '';
    for (let k of feess.keys()) {
        let fees = feess.get(k);

        tblData += '<tr><td>' + fees.feesType + '</td>';
      
        tblData += '<td>' + fees.fee + '</td>';
     
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editFees(' + (k) + ')" title="Edit Fees details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#feesData').html(tblData);
    $('#fTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllFees();

const editFees = (feesId) => {
    feesId = feesId.toString();
    fees_details = feess.get(feesId);
    feesId_np = feesId;
    $('#newFees').hide();
    $('#editfeesNew').load('edit_newFees.php');
};
