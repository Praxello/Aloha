check_prescription(u_patientId);

function check_prescription(u_patientId) {
    let patient = appointments.get(u_patientId);
    $('#patientName').html(patient.firstName + ' ' + patient.surname);
    $.ajax({
        url: url + 'get-todayPrescription.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: u_patientId, visitDate: patient.appointmentDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                fill_exist_data(response.Data);
            } else {
                load_initital();
            }
            fetch_previous_prescription(u_patientId);
        }
    });
}

function fill_exist_data(response) {
    var count = response.length;
    var rowId = 1;
    for (var i = 0; i < count; i++) {
        addrow();
        $("#typeId" + rowId).val(response[i].type).trigger('change');
        $("#medicineId" + rowId).val(response[i].name).trigger('change');
        $("#morning" + rowId).val(response[i].morning).trigger('change');
        $("#evining" + rowId).val(response[i].evining).trigger('change');
        $("#night" + rowId).val(response[i].night).trigger('change');
        $("#duration" + rowId).val(response[i].period);
        $("#inst" + rowId).val(response[i].instruction);
        rowId++;
    }
    $('#complaintsId').importTags(response[0].complaint);
    $('#diagnosis').importTags(response[0].diagnosis);
    $('#nextVisitDate').val(response[0].nextVisitDate);
    $('#remark').val(response[0].advice);
}

function fetch_previous_prescription(u_patientId) {
    $.ajax({
        url: url + 'getAllPrescriptions.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: u_patientId },
        success: function(response) {
            if (response.Responsecode == 200) {
                fill_prev(response.Data);
            } else {
                console.log(response.Message);
            }
        }
    });
}

function fill_prev(response) {
    var count = response.length;
    for (var i = 0; i < count; i++) {
        var tblData = '',
            tbody = '';
        tblData += '<div class="card">';
        tblData += '<div class="card-header"><h3 class="d-block w-100"> ' + getDate(response[i].visitDate) + '</h3></div>';
        tblData += '<div class="card-body">';
        tblData += '<div class="row invoice-info">';
        tblData += '<div class="col-sm-6 invoice-col">';
        tblData += '<div class="alert alert-secondary mt-20">Complaints:';
        tblData += response[i].complaint;
        tblData += '</div> </div> <div class="col-sm-6 invoice-col">';
        tblData += '<div class="alert alert-secondary mt-20">Diagnosis:';
        tblData += response[i].diagnosis;
        tblData += '</div> </div> </div> <div class="row">';
        tblData += '<div class="col-12 table-responsive"> <table class="table"> <thead> ';
        tblData += ' <th>Type</th><th>Medicine</th> <th>Morning</th><th>Evening</th><th>Night</th><th>Duration</th><th>Inst</th>  </tr> </thead>';
        if (response[i].medicines != null) {
            var n = response[i].medicines.length;
            for (var j = 0; j < n; j++) {
                tbody += '<tr><td>' + response[i].medicines[j].type + '</td>';
                tbody += '<td>' + response[i].medicines[j].name + '</td>';
                tbody += '<td>' + response[i].medicines[j].morning + '</td>';
                tbody += '<td>' + response[i].medicines[j].evining + '</td>';
                tbody += '<td>' + response[i].medicines[j].night + '</td>';
                tbody += '<td>' + response[i].medicines[j].period + '</td>';
                tbody += '<td>' + response[i].medicines[j].instruction + '</td></tr>';
            }
        }
        tblData += '<tbody>' + tbody;
        tblData += ' </tbody> </table></div></div>';
        tblData += ' <div class="row"> <div class="col-6"> <p class="lead">Next Visit Date ' + getDate(response[i].nextVisitDate) + '</p>';
        tblData += ' <div class="alert alert-secondary mt-20">Remark:' + response[i].advice + '  </div>   </div>';
        tblData += ' <div class="col-6"> </div>  </div>';
        tblData += ' <div class="row no-print"> <div class="col-12">';
        // tblData += '<button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>';
        tblData += '<button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="print_prscription(\'' + response[i].patientId + '\',\'' + response[i].doctorId + '\',\'' + response[i].visitDate + '\')"><i class="fa fa-download"></i>Print</button>';
        tblData += ' </div>  </div>  </div> </div>';
        $('#prevData').append(tblData);
    }
}
getWitals(u_patientId, global_date);