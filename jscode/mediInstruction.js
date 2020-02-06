function mapInstruction() {
    var dropdownList = '<option></option>';
    for (let k of instruction.keys()) {
        console.log(instruction.get(k));
        dropdownList += '<option>' + instruction.get(k) + '</option>';
    }
    console.log(dropdownList);
    $('#instructionId').html(dropdownList);
}
$(document).ready(function() {
     mapInstruction();
    $("#instructionId").select2({
        placeholder: 'Select Instruction',
        allowClear: true,
         dropdownParent: $('#medicinesModal')
    });
});