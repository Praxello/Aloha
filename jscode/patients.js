var patients = new Map();
var patient_details = {};
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
    $('#pTable').dataTable().fnDestroy();
    $('#patientData').empty();
    var tblData = '';
    for (let k of patients.keys()) {
        let patient = patients.get(k);

        tblData += '<tr><td><img src="upload/patients/' + patient.patientId + '.jpg" class="table-user-thumb" alt="Upload"></td>';
        tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
        tblData += '<td>' + getAge(patient.birthDate) + '</td>';
        tblData += '<td>' + patient.mobile1 + '</td>';
        tblData += '<td>' + patient.address + ' ' + patient.city + '</td>';
        tblData += '<td>' + getDate(patient.lastVisitDate) + '</td>';
        tblData += '<td>' + getDate(patient.nextVisitDate) + '</td>';
        tblData += '<td><div class="table-actions">';
        tblData += '<a href="#" onclick="editPatient(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2"></i></a>';
        tblData += '<a href="#" class="list-delete" onclick="removeProduct(' + (k) + ')" title="Active/Inactive product"><i class="ik ik-check-circle"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#patientData').html(tblData);
    $('#pTable').dataTable({
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
getAllPatients();

const editPatient = (patientId) => {
    patientId = patientId.toString();
    patient_details = patients.get(patientId);
    $('#tData').hide();
    $('#editProfile').load('edit_patient_profile.php');
};