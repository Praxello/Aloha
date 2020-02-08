var medicines = new Map();
var medicine_details = {};
var medicineId_ap = null;
var list = null;
var medicineTypeList=null;
var getAllMedicines = () => {
    $.ajax({
        url: url + 'get_Medicines.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    medicines.set(response.Data[i].medicineId, response.Data[i]);
                }
                listMedicines(medicines);
            }
        }
    });
};

var listMedicines = medicines => {
    $('#medicinesTable').dataTable().fnDestroy();
    $('#medicineData').empty();
    var tblData = '';
    medicines.forEach((medicine,key) => {
        // tblData += '<tr><td>' + medicine.type + '</td>';
        tblData += '<tr><td>' + medicine.name + '</td>';
        tblData += '<td>' + medicine.genName + '</td>';
        tblData += '<td>' + medicine.type + '</td>';
        tblData += '<td>' + medicine.instruction + '</td>';
        tblData += '<td>' + medicine.morning + '</td>'; 
        tblData += '<td>' + medicine.noon + '</td>'; 
        tblData += '<td>' + medicine.night + '</td>'; 
        tblData += '<td>' + medicine.days + '</td>';
        tblData += '<td>' + medicine.isImportant + '</td>';
 
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editMedicines(' + (key) + ')" title="Edit Medicines details"><i class="ik ik-edit text-blue"></i></a>';
        tblData += '</div></td></tr>';
        
    });
    $('#medicineData').html(tblData);
    $('#medicinesTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllMedicines();

var editMedicines = (medicineId) => {
    medicineId = medicineId.toString();
    medicine_details = medicines.get(medicineId);
    medicineId_ap= medicineId;
    $('#addMedicines').hide();
    $('#medicineNew').load('edit_Medicines.php');

    var json, obj, values, i;

    

};
function loadMedicineDosage() {
    
    var dropDownList = '<option></option>';

    medicineDosage.forEach(dosage => {
        dropDownList += "<option>" + dosage + "</option>";
    });
    list = dropDownList;
  
    $('#morning').html(dropDownList);
    $('#noon').html(dropDownList);
    $('#night').html(dropDownList);

    $('.select2').select2({
        placeholder:'select',
        allowClear:true,
        tags:true,
        dropdownParent: $('#medicinesModal'),
        selectOnClose: true
    });
}
loadMedicineDosage();

function loadMedicineTypes() {
    var dropDownList = '<option></option>';
  
    medicineTypes.forEach(medicine => {
        dropDownList += "<option>" + medicine + "</option>";
    });
    medicineTypeList=dropDownList;

    $('#typeId').html(dropDownList);
    console.log(dropDownList);
    $('.select2').select2({
        placeholder:'select',
        allowClear:true,
        tags:true,
        dropdownParent: $('#medicinesModal'),
        selectOnClose: true,
    });
}
loadMedicineTypes();

function gobackMedicine(){
    $('#addMedicines').show();
    $('#medicineNew').empty();
}
