function storeTblValues() {
    var TableData = [];

    $('#prescriptionTbl tr').each(function(row, tr) {
        var typeId = $(tr).find('td:eq(0) select').val();
        var medicineId = $(tr).find('td:eq(1) select option:selected').text();
        var morning = $(tr).find('td:eq(2) select').val();
        var evining = $(tr).find('td:eq(3) select').val();
        var night = $(tr).find('td:eq(4) select').val();
        var duration = $(tr).find('td:eq(5) input').val();
        var inst = $(tr).find('td:eq(6) select option:selected').text();

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
        patientId: u_patientId,
        doctorId: data.userId,
        nextvisit: $('#nextVisitDate').val(),
        vdate: '2019-01-03'
    };
    console.log(prescriptionData);
    prescriptionData = JSON.stringify(prescriptionData);
    $.ajax({
        url: url + 'addPrescription.php',
        type: 'POST',
        data: { postdata: prescriptionData },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                alert(response.Message);
                window.open('prescription-print.php?patientId=' + response.patientId + '&doctorId=' + response.doctorId + '&visitDate=' + response.vdate);
            } else {
                alert(response.Message);
            }
        }
    });

}

function print_prscription(patientId, doctorId, visitDate) {
    window.open('prescription-print.php?patientId=' + patientId + '&doctorId=' + doctorId + '&visitDate=' + visitDate);
}