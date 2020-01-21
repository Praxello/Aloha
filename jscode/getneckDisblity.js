var neckDisiblity = new Map();
var neck_details = {};
// var patientId_ap = null;
const getNeckDisblity = (patientId) => {
    $.ajax({
        url: url + 'getNeckDisblity.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: patientId },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    neckDisiblity.set(response.Data[i].ndisabilityId, response.Data[i]);
                }
                showNeckDisiblity(neckDisiblity);
            }
        }
    });
};

const showNeckDisiblity = neckDisiblity => {
    $('#nTable').dataTable().fnDestroy();
    $('#neckData').empty();
    var tblData = '';
    for (let k of neckDisiblity.keys()) {
        let neck = neckDisiblity.get(k);

        tblData += '<tr><td>' + neck.visitDate + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editneck(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#neckData').html(tblData);
    $('#nTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};


const editneck = (neckId) => {
    neckId = neckId.toString();
    neck_details = neckDisiblity.get(neckId);
    console.log(neck_details);
    fill_neck(neck_details);
};

function fill_neck(details) {
    var json,obj,values,i;
    json = details.painIntensity;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='painIntensity']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.personalCare;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='personalCare']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.lifting;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='lifting']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.work;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='work']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.headaches;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='headaches']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.concentration;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='concentration']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.sleeping;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='sleeping']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.driving;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='driving']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.reading;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='reading']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.recreation;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
         i = 0;
        $.each($("input[name='recreation']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }


    $('#neckDis').modal('show');
}