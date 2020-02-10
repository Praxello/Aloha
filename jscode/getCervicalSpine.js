var cervicals = new Map();
var cervical_details = {};
// var patientId_ap = null;
var getCervicalSpine = (patientId) => {
    $.ajax({
        url: url + 'getAllCervicalSpine.php',
        type: 'POST',
        dataType: 'json',
        data: {
            patientId: patientId
        },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    cervicals.set(response.Data[i].cerSpineId, response.Data[i]);
                }

            }
            showCervicalSpine(cervicals);
        }
    });
};

var showCervicalSpine = cervicals => {

    $('#cTable').dataTable().fnDestroy();
    $('#carvicalData').empty();
    var tblData = '';
    for (let k of cervicals.keys()) {
        let cervical = cervicals.get(k);
        tblData += '<tr><td>' + getDate(cervical.visitDate) + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editCervicalSpine(' + (k) + ')" title="Edit patients details"><i class="ik ik-edit text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#carvicalData').html(tblData);
    $('#cTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{
            orderable: false,
            targets: [0, 1]
        }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};

var editCervicalSpine = (cerSpineId) => {
    cerSpineId = cerSpineId.toString();
    cervical_details = cervicals.get(cerSpineId);
    fill_Cervical(cervical_details);
};

function fill_Cervical(details) {
    console.log(details);
    if (details.cerVasScore != null) {
        $('#cerVasScore').val(details.cerVasScore);
    }
    if (details.cerPresentSymptoms != null) {
        $('#cerPresentSymptoms').val(details.cerPresentSymptoms);
    }
    if (details.cerFunDisabilityScore != null) {
        $('#cerFunDisabilityScore').val(details.cerFunDisabilityScore);
    }

    if (details.cerCommencedAsResult != null) {
        $('#cerCommencedAsResult').val(details.cerCommencedAsResult);
    }

    var json, obj, values, i;

    json = details.cerPresentSince;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.p1 != null) {
            $('#cerPresentSince1').val(obj.p1);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerPresentSince']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerConstSympt;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.p3 != null) {
            $('#cerConstSympt1').val(obj.p3);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerConstSympt']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerSymptAtOnset;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.p2 != null) {
            $('#cerSymptAtOnset1').val(obj.p2);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerSymptAtOnset']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.disturbedSleep;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.p4 != null) {
            $('#disturbedSleep1').val(obj.p4);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='disturbedSleep']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerAggrFactor;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.ag1 != null) {
            $('#cerAggrFactor1').val(obj.ag1);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerAggrFactor']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }





    json = details.cerGenHealth;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.p6 != null) {
            $('#cerGenHealth1').val(obj.p6);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerGenHealth']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerImaging;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.p7 != null) {
            $('#cerImaging1').val(obj.p7);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerImaging']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }


    json = details.cerResurgery;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.p8 != null) {
            $('#cerResurgery1').val(obj.p8);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerResurgery']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerNightPain;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.p9 != null) {
            $('#cerNightPain1').val(obj.p9);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerNightPain']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerAccidents;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.p10 != null) {
            $('#cerAccidents1').val(obj.p10);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerAccidents']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }


    json = details.cerWeightLoss;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.wt != null) {
            $('#cerWeightLoss1').val(obj.wt);
        }
        if (obj.wOther != null) {
            $('#cerWeightLoss2').val(obj.wOther);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerWeightLoss']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerSitting;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerSitting']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.cerStanding;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerStanding']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.protrudedHead;
    if (json != null) {
        obj = JSON.parse(json);
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='protrudedHead']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }
    json = details.cerderagement;
    if (json != null) {
        obj = JSON.parse(json);

        if (obj.d2 != null) {
            $('#cerderagement2').val(obj.p10);
        }
        if (obj.d1 != null) {
            $('#cerderagement1').val(obj.p10);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='cerderagement']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    var content = '',
        m, count;
    json = details.cerMomentLoss;
    if (json != null) {
        obj = JSON.parse(json);
        count = Object.keys(obj).length;
        var arr = ['Flexion', 'Extension', 'Side Gliding R', 'Side Gliding L', 'Protrusion', 'Retraction', 'Rotation R', 'Rotation L'];
        for (var j = 0; j < count; j++) {
            content += '<tr>';
            content += ' <th scope="row">' + arr[j] + '</th>';
            content += '<td><input type="text" class="form-control"  value="' + obj[j].maj + '"></td>';
            content += '<td><input type="text" class="form-control"  value="' + obj[j].mod + '"></td>';
            content += '<td><input type="text" class="form-control"  value="' + obj[j].min + '"></td>';
            content += '<td><input type="text" class="form-control"  value="' + obj[j].nil + '"></td>';
            content += '<td><input type="text" class="form-control"  value="' + obj[j].pain + '"></td>';
            content += '</tr>';
        }
        $('#cerMomentLoss').html(content);

    }
    json = details.cerTestMovement;
    obj = JSON.parse(json);
    if (Object.keys(obj).length === 0) {} else {
        content = '';
        content += '<tr>';
        content += ' <th scope="row">Rep EIL</th>';
        content += '<td><input type="text" class="form-control"  value="' + obj[0]['During-test'] + '"></td>';
        content += '<td><input type="text" class="form-control"  value="' + obj[0]['after-test'] + '"></td>';
        content += '<td><input type="text" class="form-control"  value="' + obj[0]['m-rom-u'] + '"></td>';
        content += '<td><input type="text" class="form-control"  value="' + obj[0]['m-rom-d'] + '"></td>';
        content += '<td><input type="text" class="form-control"  value="' + obj[0]['m-noefect'] + '"></td>';
        content += '</tr>';
        $('#cerTestMovement').html(content);
    }
    $('#cervicalSpine').modal('show');
}