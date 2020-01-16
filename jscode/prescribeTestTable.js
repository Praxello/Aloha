var rowhtml, rowid = 0;
var uniqueTest = new Set();
var tAmt = 0.00;

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
            tAmt = parseFloat(tests.fees) + tAmt;
            $('#tAmt').val(tAmt.toLocaleString());
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


function getSelectedText() {
    var a = $("#paymentFor option:selected").text();
    $('#dName').html(a);
}

function calculateAmt(amount) {
    if (amount == '') {
        $('#tAmt').val(tAmt);
    } else {
        amount = parseFloat(amount);
        var total = parseFloat($('#tAmt').val());
        var formula = (100 * amount) / total;
        $('#pAmt').val(formula.toFixed(2));
        $('#tAmt').val(tAmt - amount);
    }
}