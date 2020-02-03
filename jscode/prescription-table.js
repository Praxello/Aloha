var rowid = 0;
var rowhtml = "";

function load_initital() {
    for (var i = 0; i < 4; i++) {
        addrow();
    }
}

function addrow() {
    rowid += 1;
    rowhtml = "";
    rowhtml += '<tr id="row' + rowid + '">';
    rowhtml += '<td>';
    rowhtml += '<select class="form-control" id="typeId' + rowid + '" name="typeId' + rowid + '" style="width:100%;">';
    rowhtml += '</select>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<select class="form-control" id="medicineId' + rowid + '" name="medicineId' + rowid + '" style="width:100%;">';
    rowhtml += '</select>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<select class="form-control" id="morning' + rowid + '" name="morning' + rowid + '"  style="width:100%;">';
    rowhtml += '</select>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<select class="form-control" id="evining' + rowid + '" name="evining' + rowid + '"  style="width:100%;">';
    rowhtml += '</select>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<select class="form-control" id="night' + rowid + '" name="night' + rowid + '"  style="width:100%;">';
    rowhtml += '</select>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<input type="text" class="form-control" id="duration' + rowid + '" name="duration' + rowid + '"/>';
    rowhtml += '</td>';
    rowhtml += '<td>';
    rowhtml += '<select  class="form-control" id="inst' + rowid + '" name="inst' + rowid + '" style="width:100%;">';
    rowhtml += '</select></td>';
    rowhtml += '<td>';
    rowhtml += '<button type="button" class="btn btn-icon btn-danger" onclick="deleterow(' + rowid + ')" title="Remove Medicine"><i class="ik ik-minus"></i></button>';
    rowhtml += '</td>';
    rowhtml += '</tr>';

    $("#prescData").prepend(rowhtml);
    loadMedicine(rowid);
    loadMedicineTypes(rowid);
    loadMedicineDosage(rowid);
    loadInstructions(rowid);
    $("#typeId" + rowid).select2({
        placeholder: 'select type of medicine',
        allowClear: true
    });
    $("#medicineId" + rowid).select2({
        placeholder: 'select medicine',
        allowClear: true
    });
    $("#morning" + rowid).select2({
        placeholder: 'select from list',
        allowClear: true
    });
    $("#evining" + rowid).select2({
        placeholder: 'select from list',
        allowClear: true
    });
    $("#night" + rowid).select2({
        placeholder: 'select from list',
        allowClear: true
    });
    $("#inst" + rowid).select2({
        placeholder: 'select instruction',
        allowClear: true,
        tags: true
    });
}

function deleterow(id) {
    $("#row" + id).remove();
}