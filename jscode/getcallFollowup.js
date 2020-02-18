var followupes = new Map();
var followup_details = {};
// var dosageId_ap = null;

const getAllCallFollowup = () => {
    $.ajax({
        url: url + 'getCallFollowup.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    followupes.set(response.Data[i].callFollowupsId, response.Data[i]);
                }
         
                listFollowup(followupes);
            }
        }
    });
};

const listFollowup = followupes => {
    $('#followTable').dataTable().fnDestroy();
    $('#callFollData').empty();
    var tblData = '';
    for (let k of followupes.keys()) {
        let followup = followupes.get(k);
      
        tblData += '<tr><td>' + followup.callId + '</td>';
        tblData += '<td>' + followup.followUp + '</td>';
        tblData += '<td>' + followup.followUpDateTime + '</td>';
        tblData += '<td>' + followup.attendedBy + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editDosage(' + (k) + ')" title="Edit dosage details"><i class="ik ik-edit text-blue"></i></a>';
     
        tblData += '</div></td></tr>';
    }
    $('#callFollData').html(tblData);
    $('#followTable').dataTable({
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
getAllCallFollowup();

// var editDosage = (dosageId) => {
//     dosageId = dosageId.toString();
//     dosage_details = dosageM.get(dosageId);
//     dosageId_ap= dosageId;
//     console.log(dosageId_ap);
//     $('#dosRecord').hide();
//     $('#doseNew').load('edit_Dosage_Master.php');

// };


