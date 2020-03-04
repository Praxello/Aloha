var exerciseRow = 0;
var exerciseHtml = "";

function initial_exercise() {
    for (var i = 0; i < 3; i++) {
        addExercise();
    }
}
initial_exercise();

function addExercise() {
    exerciseRow += 1;
    exerciseHtml = "";
    exerciseHtml += '<tr id="rowExer' + exerciseRow + '">';
    exerciseHtml += '<td>';
    exerciseHtml += '<select class="form-control exercise" id="exerciseTitle' + exerciseRow + '" name="exerciseTitle' + exerciseRow + '">';
    exerciseHtml += '</select>';
    exerciseHtml += '</td>';
    exerciseHtml += '<td style="width: 8px;"><img src="upload/exercise/2.jpg" class="img-rounded img" alt="Upload" style="height:80px; width:120px"></td>';
    exerciseHtml += '<td>';
    exerciseHtml += '<input type="text" class="form-control exrow" id="exerciseDetails' + exerciseRow + '" name="exerciseDetails' + exerciseRow + '"/>';
    exerciseHtml += '</td>';
    exerciseHtml += '<td >';
    exerciseHtml += '<textarea rows="2" col="2" class="form-control exesteps" id="exerciseSteps' + exerciseRow + '" name="exerciseSteps' + exerciseRow + '"></textarea>';
    exerciseHtml += '</td>';
    exerciseHtml += '<td>';
    exerciseHtml += '<button type="button" class="btn btn-icon btn-danger" onclick="removeExercise(' + exerciseRow + ')" title="Remove Medicine"><i class="ik ik-minus"></i></button>';
    exerciseHtml += '</td>';
    exerciseHtml += '</tr>';

    $("#exerciseData").prepend(exerciseHtml);
    // loadMedicine(exerciseRow);
    $("#exerciseTitle" + exerciseRow).select2({
        placeholder: 'Select exercise',
        width:"100%",
        allowClear: true
    });
}

function removeExercise(id) {
    $("#rowExer" + id).remove();
}