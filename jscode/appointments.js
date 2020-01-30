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
        i = 0,
        patientType = '',
        nType = 0,
        cType = 0;
    for (let k of appointments.keys()) {
        let patient = appointments.get(k);
        if (patient.appointmentDate == today) {
            i++;
            if (patient.firstVisitDate == today) {
                patientType = '<td><span class="badge badge-success">New</span></td>';
                nType = nType + 1;
            } else {
                patientType = '<td><span class="badge badge-warning">Follow</span></td>';
            }
            tblData += '<tr><td><img src="upload/patients/' + patient.patientId + '.jpg" class="table-user-thumb" alt="Upload"></td>';
            tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
            if (getConsultingStatus(patient.patientId, patient.doctorId, patient.appointmentDate) == 1) {
                cType = cType + 1;
                tblData += '<td><span class="badge badge-success">Consulted</span></td>';
            } else {
                tblData += '<td><span class="badge badge-default">Pending</span></td>';
            }

            tblData += '<td>' + patient.doctorName + '</td>';
            tblData += '<td>' + fees_status(patient.patientId, patient.doctorId, patient.appointmentDate) + '</td>';
            tblData += patientType;
            tblData += '<td ><div class="table-actions" style="text-align : left" >';
            tblData += '<a href="#"  onclick="editPatient(' + (k) + ')" title="medication"><i class="ik ik-edit" style="color: blue;"></i></a>';
            tblData += '</div></td></tr>';
        }

    }
    $('#consulted').html(cType);
    $('#totalPatient').html(i);
    $('#newPatients').html(nType);
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

var fees_status = (patientId, doctorId, visitDate) => {
    var fees = 0;
    $.ajax({
        url: url + 'getFees-status.php',
        type: 'POST',
        dataType: 'json',
        data: {
            doctorId: doctorId,
            patientId: patientId,
            visitDate: visitDate
        },
        async: false,
        success: function(response) {
            if (response.Responsecode == 200) {
                fees = parseFloat(response.Data.fees);
            } else {
                fees = 'unmarked';
            }
        }
    });
    return fees;
};

var getConsultingStatus = (patientId, doctorId, visitDate) => {
    var flag = 0;
    $.ajax({
        url: url + 'getConsultingStatus.php',
        type: 'POST',
        dataType: 'json',
        data: {
            doctorId: doctorId,
            patientId: patientId,
            visitDate: visitDate
        },
        async: false,
        success: function(response) {
            if (response.Responsecode == 200) {
                flag = 1;
            } else {
                flag = 0;
            }
        }
    });
    return flag;
};