var rowhtml, rowid = 0;
var uniqueTest = new Set();

function addrow() {
    var T = $('#test').val();
    if (T != '') {
        T = T.toString();
        if (uniqueTest.has(T)) {
            swal('Already Added');
        } else {
            uniqueTest.add(T);
            var tests = test.get(T);
            rowid += 1;
            rowhtml = "";
            rowhtml += '<tr id="row' + rowid + '">';
            rowhtml += '<td>';
            rowhtml += tests.testName;
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += tests.fees;
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += '<button type="button" class="btn btn-icon btn-danger" onclick="deleterow(' + rowid + ',' + (T) + ')" ><i class="ik ik-minus"></i></button>';
            rowhtml += '</td>';
            rowhtml += '</tr>';
            $("#presTableBody").prepend(rowhtml);
        }
    } else {
        swal('Select a test');
    }
}

function deleterow(id, test) {
    test = test.toString();
    uniqueTest.delete(test);
    $("#row" + id).remove();
}