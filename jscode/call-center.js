var calls = new Map();
var existCall = new Map();
var clientId = null,
    up_callId = null;
var customers = new Map();

function branches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branch').html(dropdownList);
    $("#branch").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
    $('#branchA').html(dropdownList);
    $("#branchA").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
    $('#branchF').html(dropdownList);
    $("#branchF").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
}
branches();
$("#callStatus").select2({
    placeholder: 'Select Call Status',
    allowClear: true,
    dropdownParent: $('#fullwindowModal')
});
const getAllClients = () => {
    $.ajax({
        url: url + 'getAllcustomers.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const cust = response.Data;
                cust.forEach(customer => {
                    customers.set(customer.clientId, customer);
                });
            }
        }
    });
};
// getAllClients();
const listCustomers = customers => {

    $('#appT').hide();
    $('#customerT').show();
    $('#customerTable').dataTable().fnDestroy();
    $('#customerData').empty();
    var tblData = '';
    customers.forEach(customer => {
        tblData += '<tr><td>' + customer.firstName + ' ' + customer.lastName + '</td>';
        tblData += '<td>' + customer.email + '</td>';
        tblData += '<td>' + getAge(customer.dateOfBirth) + '</td>';
        tblData += '<td>' + customer.mobile + '</td>';
        tblData += '<td>' + customer.stateName + ',' + customer.cityName + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editCustomer(' + (customer.clientId) + ')" title="Edit call details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    });
    $('#customerData').html(tblData);
    $('#customerTable').dataTable({
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
const getAllCalls = (fromDate, uptoDate, branchId) => {
    calls.clear();
    $.ajax({
        url: url + 'getAllCalls.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate, branchId: branchId },
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
const getFollowuplist = (fromDate, uptoDate, branchId) => {
    calls.clear();
    $.ajax({
        url: url + 'getFollowupcall.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate, branchId: branchId },
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
        var badge = '',
            st = '';
        if (call.folowupNeeded == 1) {
            badge = '<td><span class="badge badge-success">Yes</span></td>';
        } else {
            badge = '<td></td>';
        }
        if (call.callStatus == 1) {
            st = '<td><span class="badge badge-success">Idle</span></td>';
        } else if (call.callStatus == 2) {
            st = '<td><span class="badge badge-warning">Close</span></td>';
        } else {
            st = '<td><span class="badge badge-success">Idle</span></td>';
        }
        tblData += '<tr><td>' + call.firstName + ' ' + call.lastName + '</td>';
        tblData += '<td>' + call.email + '</td>';
        tblData += '<td>' + getAge(call.dateOfBirth) + '</td>';
        tblData += '<td>' + call.mobile + '</td>';
        tblData += '<td>' + call.stateName + ',' + call.cityName + '</td>';
        tblData += '<td>' + getDate(call.appointmentDate) + '</td>';
        tblData += badge;
        tblData += st;
        tblData += '<td>' + call.folowupNeededDateTime + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editCall(' + (k) + ')" title="Edit call details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '<a href="#" onclick="takeFeedback(' + (k) + ')" title="Take Feedback"><i class="ik ik-message-circle" style="color:purple"></i></a>';
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
    $('#s2').hide();
    fill_data(call);
};

function takeFeedback(callId) {
    up_callId = callId;
    getAllCallFollowup(up_callId);
    $('#takeFeedback').modal('show');
}

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
        var branch = null;
        var fromDate = $('#fromDate').val();
        var uptoDate = $('#uptoDate').val();
        if ($('#branch').val() != '') {
            branch = $('#branch').val();
        }
        getAllCalls(fromDate, uptoDate, branch);
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
        var branchId = null;
        if ($('#branchA').val() != '') {
            branchId = $('#branchA').val();
        }
        getFollowuplist(fromDate, uptoDate, branchId);
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
    $('#nearByArea').val(call.nearByArea);
    $('#reference').val(call.reference).trigger('change');
    //$('#calldatetime').val(call.callDateTime);
    $('#branchId').val(call.branchId).trigger('change');
    $('#desease').val(call.disease);
    $('#appointmentDate').val(call.appointmentDate);
    $('#remarks').val(call.remarks);
    $('#userId').val(call.doctorId).trigger('change');
    // console.log(moment().format(call.folowupNeededDateTime.DATETIME_LOCAL));
    $('#callStatus').val(call.callStatus).trigger('change');
    $('#follwupdate').val(call.folowupNeededDateTime);
    if (call.folowupNeeded == 1) {
        $('#folowupNeeded').prop('checked', true);
    }
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
    fill_search_data(call);
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
        var branchId = null;
        if ($('#branchA').val() != '') {
            branchId = $('#branchA').val();
        }
        $.ajax({
            url: url + 'getAbsentCallList.php',
            type: 'POST',
            dataType: 'json',
            data: { fromDate: fromDate, uptoDate: uptoDate, branchId: branchId },
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

function fill_search_data(call) {
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
    $('#branchId').val(call.branchId).trigger('change');
    $('#desease').val(call.disease);
    $('#appointmentDate').val(call.appointmentDate);
    $('#remarks').val(call.remarks);
    $('#userId').val(call.doctorId).trigger('change');
    $('#follwupdate').val(call.folowupNeededDateTime);
    $('#clientId').val(call.clientId);
    $('#fullwindowModal').modal('show');
}