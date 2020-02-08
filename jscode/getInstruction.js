var instruction = new Map();
var instruction_details = {};
var instructionId_ap = null;

const getAllInstructionn = () => {
    $.ajax({
        url: url + 'getAllInstruction.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    instruction.set(response.Data[i].instructionId, response.Data[i]);
                }
         
                listInstr(instruction);
            }
        }
    });
};

const listInstr = instruction => {
    $('#istrtnTable').dataTable().fnDestroy();
    $('#instData').empty();
    var tblData = '';
    for (let k of instruction.keys()) {
        let inst = instruction.get(k);

        tblData += '<tr><td>' + inst.instruction + '</td>';
        tblData += '<td>' + inst.hindi + '</td>';
        tblData += '<td>' + inst.marathi + '</td>';
  
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editInstruction(' + (k) + ')" title="Edit Instruction details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#instData').html(tblData);
    $('#istrtnTable').dataTable({
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
getAllInstructionn();

const editInstruction = (instructionId) => {
    instructionId = instructionId.toString();
    instruction_details = instruction.get(instructionId);
    instructionId_ap= instructionId;
    console.log(instructionId_ap);
    $('#itData').hide();
    $('#instrNew').load('edit_InstructionMaster.php');

};

function gobackInstruction(){
    $('#itData').show();
    $('#instrNew').empty();
}