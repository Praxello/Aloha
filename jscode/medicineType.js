var medicineType = new Map();
var  medicineType_details = {};
var medicineTypeId_ap = null;

const getAllMedicine = () => {
    $.ajax({
        url: url + 'getMedicineTypes.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    medicineType.set(response.Data[i].medicineTypeId, response.Data[i]);
                }
         
                listMType(medicineType);
            }
        }
    });
};

const listMType = medicineType => {
    $('#mTypeTable').dataTable().fnDestroy();
    $('#mTypeData').empty();
    var tblData = '';
    for (let k of medicineType.keys()) {
        let mType = medicineType.get(k);

        tblData += '<tr><td>' + mType.medicineTypeId + '</td>';
        tblData += '<td>' + mType.type + '</td>';
      
 
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editMType(' + (k) + ')" title="Edit complaints details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#mTypeData').html(tblData);
    $('#mTypeTable').dataTable({
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
getAllMedicine();

var editMType = (medicineTypeId) => {
    medicineTypeId = medicineTypeId.toString();
    medicineType_details = medicineType.get(medicineTypeId);
    medicineTypeId_ap= medicineTypeId;
    console.log(medicineTypeId_ap);
    $('#meTypeRecord').hide();
    $('#editMedNew').load('edit_mediType_Master.php');

};

function goBackType(){
    $('#meTypeRecord').show();
    $('#editMedNew').empty();
}