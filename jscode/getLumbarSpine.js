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
    var json;
    json = details.presentSince;
    if (json != null) {
        var obj = JSON.parse(json);
        if (obj.s != null) {
            $('#presentSince1').val(obj.s);
        }
        var values = Object.keys(obj).map(function(key) { return obj[key]; });
        console.log(values);
        var i = 0;
        $.each($("input[name='presentSince']"), function() {
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