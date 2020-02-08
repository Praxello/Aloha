function mapMedicineType() {
    var dropdownList = '<option></option>';
    for (let k of medicine.keys()) {
        // console.log(instruction.get(k));
        dropdownList += '<option value="' + k + '">' + medicine.get(k) + '</option>';
    }
    // console.log(dropdownList);
    $('#medicineTypeId').html(dropdownList);
}
$(document).ready(function() {
    mapMedicineType();
    $("#medicineTypeId").select2({
        placeholder: 'Select type',
        allowClear: true,
         dropdownParent: $('#medicineMasterForm')
    });
});