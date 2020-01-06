var appointments = new Map();
const getAllAppointments = () => {
    $.ajax({
        url: url + 'getAllAppointments.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    appointments.set(response.Data[i].appointmentId, response.Data[i]);
                }
                listAppointments(appointments);
            }
        }
    });
};

const listAppointments = appointments => {
    $('#aTable').dataTable().fnDestroy();
    $('#aptData').empty();
    var tblData = '';
    for (let k of appointments.keys()) {
        let patient = appointments.get(k);
        tblData += '<tr><td><img src="upload/patients/' + patient.patientId + '.jpg" class="table-user-thumb" alt="Upload"></td>';
        tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
        tblData += '<td>' + patient.username + '</td>';
        tblData += '<td>' + patient.scheduledBy + '</td>';
        tblData += '<td>' + getDate(patient.appointmentDate) + '</td>';
        tblData += '<td><div class="table-actions">';
        tblData += '<a href="#" onclick="editPatient(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2"></i></a>';
        tblData += '<a href="#" class="list-delete" onclick="removeProduct(' + (k) + ')" title="Active/Inactive product"><i class="ik ik-check-circle"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#aptData').html(tblData);
    $('#aTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllAppointments();

const editPatient = (patientId) => {
    patientId = patientId.toString();
    $('#tData').hide();
    $('#editProfile').load('prescription.php');
};