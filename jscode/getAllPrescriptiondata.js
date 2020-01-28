function loadMedicine(id) {

    var dropDownList = '';
    for (let k of medicines.keys()) {
        var data = medicines.get(k);
        dropDownList += "<option>" + data.name + "</option>";
    }
    $('#medicineId' + id).html(dropDownList);
}

function loadMedicineTypes(id) {
    var dropDownList = '';
    medicineTypes.forEach(medicine => {
        dropDownList += "<option>" + medicine + "</option>";
    });
    $('#typeId' + id).html(dropDownList);
}

function loadMedicineDosage(id) {
    var dropDownList = '';

    medicineDosage.forEach(dosage => {
        dropDownList += "<option>" + dosage + "</option>";
    });
    $('#morning' + id).html(dropDownList);
    $('#evining' + id).html(dropDownList);
    $('#night' + id).html(dropDownList);
}

var getWitals = (patientId, today) => {
    $.ajax({
        url: url + 'getPatientWitals.php',
        type: 'POST',
        dataType: 'json',
        data: {
            patientId: patientId,
            visitDate: today
        },
        success: function(response) {
            if (response.Responsecode == 200) {
                $('#bp').val(response.Data.bp);
                $('#pulse').val(response.Data.pulse);
                $('#height').val(response.Data.height);
                $('#weight').val(response.Data.weight);
                $('#west').val(response.Data.waist);
                $('#hip').val(response.Data.hip);
                $('#temp').val(response.Data.temperature);
                $('#spo2').val(response.Data.spo2);
            }
        }
    });
};