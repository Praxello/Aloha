var diagnosis = new Map();
var diagnosis_details = {};
var  diagnosisId_ap = null;

const getAlldiagnosis = () => {
    $.ajax({
        url: url + 'getAllDiagnosisMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    diagnosis.set(response.Data[i].diagnosisId, response.Data[i]);
                }
         
                listdiagnosis(diagnosis);
            }
        }
    });
};

const listdiagnosis = diagnosis => {
    $('#diaTable').dataTable().fnDestroy();
    $('#diaData').empty();
    var tblData = '';
    for (let k of diagnosis.keys()) {
        let diagnos = diagnosis.get(k);

        tblData += '<tr><td>' + diagnos.diagnosisId + '</td>';
        tblData += '<td>' + diagnos.diagnosis + '</td>';
        tblData += '<td>' + diagnos.icdCode  + '</td>';
 
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editDiagnosis(' + (k) + ')" title="Edit branch details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#diaData').html(tblData);
    $('#diaTable').dataTable({
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
getAlldiagnosis();

const editDiagnosis = (diagnosisId) => {
    diagnosisId = diagnosisId.toString();
    diagnosis_details = diagnosis.get(diagnosisId);
    diagnosisId_ap= diagnosisId;
    console.log(diagnosisId_ap);
    $('#diagnosisData').hide();
    $('#editdiaNew').load('edit_Diagnosis_Master.php');
 
};
