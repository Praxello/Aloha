var dosageM = new Map();
var dosage_details = {};
var dosageId_ap = null;

const getAllDosagess = () => {
    $.ajax({
        url: url + 'get_Dosage.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    dosageM.set(response.Data[i].dosageId, response.Data[i]);
                }
         
                listDosage(dosageM);
            }
        }
    });
};

const listDosage = dosageM => {
    $('#dosTable').dataTable().fnDestroy();
    $('#dosageData').empty();
    var tblData = '';
    for (let k of dosageM.keys()) {
        let dose = dosageM.get(k);

        tblData += '<tr><td>' + dose.dosageId + '</td>';
        tblData += '<td>' + dose.dosage + '</td>';
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editDosage(' + (k) + ')" title="Edit dosage details"><i class="ik ik-edit text-blue"></i></a>';
        
    
        tblData += '</div></td></tr>';
    }
    $('#dosageData').html(tblData);
    $('#dosTable').dataTable({
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
getAllDosagess();

var editDosage = (dosageId) => {
    dosageId = dosageId.toString();
    dosage_details = dosageM.get(dosageId);
    dosageId_ap= dosageId;
    console.log(dosageId_ap);
    $('#dosRecord').hide();
    $('#doseNew').load('edit_Dosage_Master.php');

};

function gobackDosage(){
    $('#dosRecord').show();
    $('#doseNew').empty();
}