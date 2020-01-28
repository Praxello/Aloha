var appointments = new Map();
var u_patientId = null;
var global_patientId = null; //for lumbar neck,and back pain
var global_date = moment().format('YYYY-MM-DD');
$('#dropper-max-year').val(moment().format('YYYY-MM-DD'));
const getAllAppointments = (doctorId) => {
    $.ajax({
        url: url + 'getAllAppointments.php',
        type: 'POST',
        dataType: 'json',
        data: { doctorId: doctorId },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    appointments.set(response.Data[i].appointmentId, response.Data[i]);
                }
                var today = getToday();
                listAppointments(appointments, today);
            }
        }
    });
};

const listAppointments = (appointments, today) => {
    $('#aTable').dataTable().fnDestroy();
    $('#aptData').empty();
    var tblData = '',
        i = 0;
    for (let k of appointments.keys()) {
        let patient = appointments.get(k);
        if (patient.appointmentDate == today) {
            i++;
            tblData += '<tr><td><img src="upload/patients/' + patient.patientId + '.jpg" class="table-user-thumb" alt="Upload"></td>';
            tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
            tblData += '<td>' + patient.doctorName + '</td>';
            tblData += '<td>' + patient.scheduledBy + '</td>';
            tblData += '<td>' + getDate(patient.appointmentDate) + '</td>';
            tblData += '<td><div class="table-actions">';
            tblData += '<a href="#" onclick="editPatient(' + (k) + ')" title="medication"><i class="ik ik-edit"></i></a>';
            tblData += '</div></td></tr>';
        }

    }
    $('#totalPatient').html(i);
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
getAllAppointments(data.userId);

const editPatient = (patientId) => {
    patientId = patientId.toString();
    u_patientId = patientId;
    global_patientId = patientId;
    let patient = appointments.get(patientId);
    // $(".wrapper").toggleClass("right-sidebar-expand");
    $('#tData').hide();
    $('#editProfile').load('edit-prescription.php');
};

function getToday() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    return today;
}

function fetch(today) {
    var search_date = moment(today).format('YYYY-MM-DD');
    listAppointments(appointments, search_date);
}