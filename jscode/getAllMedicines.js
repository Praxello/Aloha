var medicines = new Map();
var medicine_details = {};
var medicineId_ap = null;

const getAllMedicines = () => {
    $.ajax({
        url: url + 'get_Medicines.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
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

const listMedicines = medicines => {
    $('#medicinesTable').dataTable().fnDestroy();
    $('#medicineData').empty();
    var tblData = '';
    for (let k of medicines.keys()) {
        let medicine = medicines.get(k);

       
        // tblData += '<tr><td>' + medicine. type + '</td>';
        tblData += '<tr><td>' + medicine.name + '</td>';
        tblData += '<td>' + medicine.genName + '</td>';
        tblData += '<td>' + medicine.dosage + '</td>';
        tblData += '<td>' + medicine.instruction + '</td>';
        tblData += '<td>' + medicine.days + '</td>';
        tblData += '<td>' + medicine.isImportant + '</td>';
 
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editMedicines(' + (k) + ')" title="Edit Medicines details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
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

// const editComplaints = (complaintId) => {
//     complaintId = complaintId.toString();
//     complaint_details = complaint.get(complaintId);
//     complaintId_ap= complaintId;
//     console.log(complaintId_ap);
//     $('#complaintsData').hide();
//     $('#complaintNew').load('edit_Complaint_Master.php');

// };
