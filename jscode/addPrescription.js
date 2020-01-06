function storeTblValues() {
    var TableData = [];

    $('#prescriptionTbl tr').each(function(row, tr) {
        var typeId = $(tr).find('td:eq(0) select').val();
        var medicineId = $(tr).find('td:eq(1) select option:selected').text();
        var morning = $(tr).find('td:eq(2) select').val();
        var evining = $(tr).find('td:eq(3) select').val();
        var night = $(tr).find('td:eq(4) select').val();
        var duration = $(tr).find('td:eq(5) input').val();
        var inst = $(tr).find('td:eq(6) input').val();

        TableData[row] = {
            "typeId": typeId,
            "medicineId": medicineId,
            "morning": morning,
            "evining": evining,
            "night": night,
            "duration": duration,
            "inst": inst

        };
    });
    TableData.shift();
    return TableData;
}

function savePrescription() {
    var prescriptionData = {
        medicinesDetails: storeTblValues(),
        remarks: $('#remark').val(),
        complaints: $('#complaintsId').val(),
        diagnosis: $('#diagnosis').val(),
        patientId: 1,
        doctorId: 1
    };
    prescriptionData = JSON.stringify(prescriptionData);
    $.ajax({
        url: url + 'addPrescription.php',
        type: 'POST',
        data: { postdata: prescriptionData },
        dataType: 'json',
        success: function(response) {
            alert(response.Message);
        }
    });

}