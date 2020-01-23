var cervicals = new Map();
var cervical_details = {};
// var patientId_ap = null;
const getCervicalSpine = (patientId) => {
    $.ajax({
        url: url + 'getAllCervicalSpine.php',
        type: 'POST',
        dataType: 'json',
        data: {
            patientId: patientId
        },
        success: function(response) {
            console.log(response);
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

const showCervicalSpine = cervicals => {
    console.log(cervicals);
    $('#cTable').dataTable().fnDestroy();
    $('#carvicalData').empty();
    var tblData = '';
    for (let k of cervicals.keys()) {
        let cervical = cervicals.get(k);
console.log(cervical.visitDate);
        tblData += '<tr><td>' + getDate(cervical.visitDate) + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editCervicalSpine(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
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

const editCervicalSpine = (cerSpineId) => {
    console.log(cerSpineId);
    cerSpineId = cerSpineId.toString();
    cervical_details = cervicals.get(cerSpineId);
   
    fill_Cervical(cervical_details);
};

function fill_Cervical(details) {
    if (details.cerfunDisabilityScore != null) {
        $('#cerfunDisabilityScore').val(details.cerfunDisabilityScore);
    }
    if (details.cerVasScore != null) {
        $('#cerVasScore').val(details.cerVasScore);
    }
    if (details.presentSymptoms != null) {
        $('#presentSymptoms').val(details.presentSymptoms);
    }
    if (details.commencedAsResult != null) {
        $('#commencedAsResult').val(details.commencedAsResult);
    }
    if (details.prevTreatments != null) {
        $('#prevTreatments').val(details.prevTreatments);
    }
    if (details.motorDeficit != null) {
        $('#motorDeficit').val(details.motorDeficit);
    }
    if (details.sensoryDeficit != null) {
        $('#sensoryDeficit').val(details.sensoryDeficit);
    }

    var json, obj, values, i;

    json = details.presentSince;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.s != null) {
            $('#presentSince1').val(obj.s);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='presentSince']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.symptomsAtOnset;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.s1 != null) {
            $('#symptomsAtOnset1').val(obj.s1);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='symptomsAtOnset']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.constantSymptoms;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.s2 != null) {
            $('#constantSymptoms1').val(obj.s2);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='constantSymptoms']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.interSymptoms;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.s3 != null) {
            $('#interSymptoms1').val(obj.s3);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='interSymptoms']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.aggravatingFactor;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.otherA != null) {
            $('#aggravatingFactor1').val(obj.otherA);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='aggravatingFactor']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.relivingFactor;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.otherR != null) {
            $('#relivingFactor1').val(obj.otherR);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='relivingFactor']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.specSymptoms;
    if (json != null) {
        obj = JSON.parse(json);

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='specSymptoms']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.bladder;
    if (json != null) {
        obj = JSON.parse(json);

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='bladder']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.medications;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.other != null) {
            $('#medications1').val(obj.other);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='medications']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.GeneralHealth;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.GHealth != null) {
            $('#GeneralHealth1').val(obj.GHealth);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='GeneralHealth']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.imaging;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.imaging != null) {
            $('#imaging1').val(obj.imaging);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='imaging']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.recentsurgery;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.surgery != null) {
            $('#recentsurgery1').val(obj.surgery);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='recentsurgery']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.nightPain;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.nPain != null) {
            $('#nightPain1').val(obj.nPain);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='nightPain']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.accidents;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.acc != null) {
            $('#accidents1').val(obj.acc);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='accidents']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.weightLoss;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.other1 != null) {
            $('#weightLoss2').val(obj.other1);
        }
        if (obj.weight != null) {
            $('#weightLoss1').val(obj.weight);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='weightLoss']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.sitting;
    if (json != null) {

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='sitting']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.lordosis;
    if (json != null) {

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='lordosis']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }
    json = details.lateralshift;
    if (json != null) {

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='lateralshift']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.derangement;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.painlocation != null) {
            $('#derangement1').val(obj.painlocation);
        }
        if (obj.other != null) {
            $('#derangement2').val(obj.other);
        }
        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='derangement']"), function() {
            if (values[i] == 1) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            i++;
        });
    }

    json = details.mechTherapy;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.therapy != null) {
            $('#mechTherapy1').val(obj.therapy);
        }

        values = Object.keys(obj).map(function(key) {
            return obj[key];
        });
        i = 0;
        $.each($("input[name='mechTherapy']"), function() {
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
    json = details.moveMentLoss;
    if (json != null) {

        obj = JSON.parse(json);
        count = Object.keys(obj).length;
        var arr = ['Flexion', 'Extension', 'Side Gliding R', 'Side Gliding L'];
        for (var j = 0; j < count; j++) {
            content += '<tr>';
            content += ' <th scope="row">' + arr[j] + '</th>';
            content += '<td><input type="text" class="form-control" id="maj" value="' + obj[j].maj + '"></td>';
            content += '<td><input type="text" class="form-control" id="mod" value="' + obj[j].mod + '"></td>';
            content += '<td><input type="text" class="form-control" id="min" value="' + obj[j].min + '"></td>';
            content += '<td><input type="text" class="form-control" id="nil" value="' + obj[j].nil + '"></td>';
            content += '<td><input type="text" class="form-control" id="pain" value="' + obj[j].pain + '"></td>';
            content += '</tr>';
        }
        $('#momentData').html(content);

    }
    json = details.testMovement;
    if (json != null) {
        content = '';
        obj = JSON.parse(json);
        content += '<tr>';
        content += ' <th scope="row">Rep EIL</th>';
        content += '<td><input type="text" class="form-control" id="maj" value="' + obj[0]['During-test'] + '"></td>';
        content += '<td><input type="text" class="form-control" id="mod" value="' + obj[0]['after-test'] + '"></td>';
        content += '<td><input type="text" class="form-control" id="min" value="' + obj[0]['m-rom-u'] + '"></td>';
        content += '<td><input type="text" class="form-control" id="nil" value="' + obj[0]['m-rom-d'] + '"></td>';
        content += '<td><input type="text" class="form-control" id="pain" value="' + obj[0]['m-noefect'] + '"></td>';
        content += '</tr>';
        $('#tMovementData').html(content);
    }
    $('#fullwindowModal2').modal('show');
}