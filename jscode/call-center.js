var calls = new Map();
var existCall = new Map();
var clientId = null,
    up_callId = null;
const getAllCalls = (fromDate, uptoDate) => {
    calls.clear();
    $.ajax({
        url: url + 'getAllCalls.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    calls.set(response.Data[i].callId, response.Data[i]);
                }
            }
            listCalls(calls);
        }
    });
};

const listCalls = calls => {
    $('#cTable').dataTable().fnDestroy();
    $('#callData').empty();
    var tblData = '';
    for (let k of calls.keys()) {
        let call = calls.get(k);
        badge = '';
        if (call.folowupNeeded == 1) {
            badge = '<td><span class="badge badge-success">Yes</span></td>';
        } else {
            badge = '<td></td>';
        }
        tblData += '<tr><td>' + call.firstName + ' ' + call.lastName + '</td>';
        tblData += '<td>' + call.email + '</td>';
        tblData += '<td>' + getAge(call.dateOfBirth) + '</td>';
        tblData += '<td>' + call.mobile + '</td>';
        tblData += '<td>' + call.city + ' ' + call.state + '</td>';
        tblData += '<td>' + getDate(call.appointmentDate) + '</td>';
        tblData += badge;
        tblData += '<td>' + getDate(call.folowupNeededDateTime) + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editCall(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#callData').html(tblData);
    $('#cTable').dataTable({
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
getAllCalls(data.today, data.today);

const editCall = (callId) => {
    callId = callId.toString();
    up_callId = callId;
    let call = calls.get(callId);
    clientId = call.clientId;
    fill_data(call);
};

function callRegister() {
    $("#callRegister").validate({
        ignore: [],
        rules: {
            fromDate: {
                required: true,
            },
            uptoDate: {
                required: true
            },
        },
        messages: {
            fromDate: {
                required: "Select from Date"
            },
            uptoDate: {
                required: "Select upto Date"
            },
        }
    });
    var returnVal = $("#callRegister").valid();
    if (returnVal) {
        var fromDate = $('#fromDate').val();
        var uptoDate = $('#uptoDate').val();
        getAllCalls(fromDate, uptoDate);
    }
}

function followupList() {
    $("#followuplist").validate({
        ignore: [],
        rules: {
            folDate: {
                required: true,
            },
            foluDate: {
                required: true
            },
        },
        messages: {
            folDate: {
                required: "Select from Date"
            },
            foluDate: {
                required: "Select upto Date"
            },
        }
    });
    var returnVal = $("#followuplist").valid();
    if (returnVal) {
        var fromDate = $('#folDate').val();
        var uptoDate = $('#foluDate').val();
        getAllCalls(fromDate, uptoDate);
    }
}

function fill_data(call) {
    $('#firstName').val(call.firstName);
    $('#middleName').val(call.middleName);
    $('#lastName').val(call.lastName);
    $('#birthdate').val(call.dateOfBirth);
    $('#gender').val(call.gender).trigger('change');
    $('#emailId').val(call.email);
    $('#mobile').val(call.mobile);
    $('#landline').val(call.landline);
    $('#country').val(call.country).trigger('change');
    $('#state').val(call.state).trigger('change');
    $('#city').val(call.city).trigger('change');
    $('#zipcode').val(call.pincode);
    $('#nearbyarea').val(call.nearByArea);
    $('#reference').val(call.reference).trigger('change');
    //$('#calldatetime').val(call.callDateTime);
    $('#branchId').val(call.branchId).trigger('change');
    $('#desease').val(call.disease);
    $('#appointmentDate').val(call.appointmentDate);
    $('#remarks').val(call.remarks);
    $('#userId').val(call.doctorId).trigger('change');
    $('#follwupdate').val(call.folowupNeededDateTime);

    $('#new').hide();
    $('#update').show();
    $('#fullwindowModal').modal('show');
}

function searchOldCalls() {
    var mobileNumber = $('#semobile').val();
    $.ajax({
        url: url + 'getSearchCall.php',
        type: 'POST',
        dataType: 'json',
        data: { mobile: mobileNumber },
        success: function(response) {
            existCall.clear();
            $('#sTable').dataTable().fnDestroy();
            $('#sData').empty();
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                var tblData = '',
                    call = {},
                    badge, new_obj;
                for (var i = 0; i < count; i++) {
                    call = response.Data[i];
                    existCall.set(response.Data[i].callId, response.Data[i]);
                    badge = '';
                    if (call.folowupNeeded == 1) {
                        badge = '<td><span class="badge badge-success">Yes</span></td>';
                    } else {
                        badge = '<td></td>';
                    }
                    tblData += '<tr><td>' + response.Data[i].firstName + ' ' + response.Data[i].lastName + '</td>';
                    tblData += '<td>' + getAge(response.Data[i].dateOfBirth) + '</td>';
                    tblData += '<td>' + response.Data[i].mobile + '</td>';
                    tblData += '<td>' + response.Data[i].city + ' ' + response.Data[i].state + '</td>';
                    tblData += '<td>' + getDate(response.Data[i].appointmentDate) + '</td>';
                    tblData += badge;
                    tblData += '<td>' + getDate(response.Data[i].folowupNeededDateTime) + '</td>';
                    tblData += '<td><div class="table-actions" style="text-align: left;">';
                    tblData += '<a href="#" onclick="renameCall(' + response.Data[i].callId + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
                    tblData += '</div></td></tr>';

                }
                $('#sData').html(tblData);
                $('#sTable').dataTable({
                    searching: true,
                    retrieve: true,
                    bPaginate: $('tbody tr').length > 10,
                    order: [],
                    columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7] }],
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf'],
                    destroy: true
                });

            }
        }
    });
}

function renameCall(callId) {
    callId = callId.toString();
    up_callId = callId;
    let call = existCall.get(callId);
    clientId = call.clientId;
    fill_data(call);
}

function newCall() {
    $('#callForm').trigger('reset');
    $('#fullwindowModal').modal('show');
}

function absentList() {
    calls.clear();
    $("#absentList").validate({
        ignore: [],
        rules: {
            foDate: {
                required: true,
            },
            upDate: {
                required: true
            },
        },
        messages: {
            foDate: {
                required: "Select from Date"
            },
            upDate: {
                required: "Select upto Date"
            },
        }
    });
    var returnVal = $("#absentList").valid();
    if (returnVal) {
        var fromDate = $('#foDate').val();
        var uptoDate = $('#upDate').val();

        $.ajax({
            url: url + 'getAbsentCallList.php',
            type: 'POST',
            dataType: 'json',
            data: { fromDate: fromDate, uptoDate: uptoDate },
            success: function(response) {
                if (response.Responsecode == 200) {
                    const count = response.Data.length;
                    for (var i = 0; i < count; i++) {
                        calls.set(response.Data[i].callId, response.Data[i]);
                    }
                }
                listCalls(calls);
            }
        });
    }
}