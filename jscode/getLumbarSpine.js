var spines = new Map();
var spine_details = {};
// var patientId_ap = null;
const getLumbarSpine = (patientId) => {
    $.ajax({
        url: url + 'getAllLumbarSpine.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: patientId },
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    spines.set(response.Data[i].lsAId, response.Data[i]);
                }

            }
            showLumbarSpine(spines);
        }
    });
};

const showLumbarSpine = spines => {
    $('#sTable').dataTable().fnDestroy();
    $('#spineData').empty();
    var tblData = '';
    for (let k of spines.keys()) {
        let spine = spines.get(k);

        tblData += '<tr><td>' + spine.visitDate + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editLumbarSpine(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#spineData').html(tblData);
    $('#sTable').dataTable({
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


const editLumbarSpine = (spineId) => {
    spineId = spineId.toString();
    spine_details = spines.get(spineId);
    console.log(spine_details);
    fill_lumbar(spine_details);
};

function fill_lumbar(details) {
    if (details.funDisabilityScore != null) {
        $('#funDisabilityScore').val(details.funDisabilityScore);
    }
    if (details.vasScore != null) {
        $('#vasScore').val(details.vasScore);
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

    var json,obj,values,i;

    json = details.presentSince;
    if (json != null) {
        obj = JSON.parse(json);
        if (obj.s != null) {
            $('#presentSince1').val(obj.s);
        }
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
       
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
       
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
     
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
     
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
     
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
        
         values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
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
    $('#fullwindowModal2').modal('show');
}