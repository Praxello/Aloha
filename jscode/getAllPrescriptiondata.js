function loadMedicine(id) {

    var dropDownList = '';
    for (let k of medicines.keys()) {
        var data = medicines.get(k);
        dropDownList += "<option value=" + k + ">" + data.name + "</option>";
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