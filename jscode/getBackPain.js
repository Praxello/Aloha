var backPain = new Map();
var back_details = {};
// var patientId_ap = null;
const getLowBackPain = (patientId) => {
    $.ajax({
        url: url + 'getBackPainQues.php',
        type: 'POST',
        dataType: 'json',
        data: { patientId: patientId },
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    backPain.set(response.Data[i].lbackpId, response.Data[i]);
                }
                showBackPain(backPain);
            }
        }
    });
};

const showBackPain = backPain => {
    $('#bTable').dataTable().fnDestroy();
    $('#backData').empty();
    var tblData = '';
    for (let k of backPain.keys()) {
        let neck = backPain.get(k);

        tblData += '<tr><td>' + neck.visitDate + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editBack(' + (k) + ')" title="Edit products back"><i class="ik ik-edit-2 text-blue"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#backData').html(tblData);
    $('#bTable').dataTable({
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


const editBack = (lbackpId) => {
    lbackpId = lbackpId.toString();
    back_details = backPain.get(lbackpId);
    global_date = back_details.visitDate;
    fill_back(back_details);
};

function fill_back(back) {
    var json,obj,values,i;
    json = back.painIntensity;
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
    $('#backPain').modal('show');
}