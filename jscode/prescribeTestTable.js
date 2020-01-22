var rowhtml, rowid = 0;
var uniqueTest = new Set();
var tAmt = 0.00;
var originalAmt = 0.00;

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
            rowhtml += tests.fees.toLocaleString();
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += '<button type="button" class="btn btn-icon btn-danger" onclick="deleterow(' + rowid + ',' + (T) + ')" ><i class="ik ik-minus"></i></button>';
            rowhtml += '</td>';
            rowhtml += '</tr>';
            $("#presTableBody").prepend(rowhtml);
            tAmt = parseFloat(tests.fees) + tAmt;
            $('#fTotal').html(tAmt.toLocaleString());
            originalAmt = tAmt;
            $('#tAmt').val(tAmt.toLocaleString());
        }
    } else {
        swal('Select a test');
    }
}

function deleterow(id, testId) {
    testId = testId.toString();
    var tests = test.get(testId);
    uniqueTest.delete(testId);
    $("#row" + id).remove();
    tAmt = tAmt - parseFloat(tests.fees);
    $('#tAmt').val(tAmt);
    $('#pAmt').val();
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

function storeDetails() {
    var TableData = [];

    $('#presTable tr').each(function(row, tr) {
        var feesType = $(tr).find('td:eq(0)').text();
        var fees = $(tr).find('td:eq(1)').text();

        TableData[row] = {
            "feesType": feesType,
            "fees": parseFloat(fees),
        };
    });
    TableData.shift();
    TableData.pop();
    return TableData;
}

function GeneratePayment() {
    var details = {
        billDetails: storeDetails(),
        amount: $('#tAmt').val(),
        originalAmt: originalAmt,
        discount: $('#dAmt').val(),
        doctorId: $('#paymentFor').val(),
        patientId: patientId_ap
    };
    details = JSON.stringify(details);
    $.ajax({
        url: url + 'generatePayment.php',
        type: 'POST',
        data: { postdata: details },
        dataType: 'json',
        success: function(response) {
            list_transactions(prevTransactions);
        }
    });
}

function attach_data(paymentId) {
    paymentId = paymentId.toString();
    let data = prevTransactions.get(paymentId);
    var rowhtml = '',
        rowid = 0,
        T = 0;
    if (data.billdetails != null) {
        var count = data.billdetails.length;
        for (var i = 0; i < count; i++) {
            T = 0;
            rowid += 1;
            rowhtml += '<tr id="row' + rowid + '">';
            rowhtml += '<td>';
            rowhtml += data.billdetails[i].feesType;
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += data.billdetails[i].fees;
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += '<button type="button" class="btn btn-icon btn-danger" onclick="deleterow(' + rowid + ',' + (T) + ')" ><i class="ik ik-minus"></i></button>';
            rowhtml += '</td>';
            rowhtml += '</tr>';
            tAmt = parseFloat(data.billdetails[i].fees) + tAmt;
        }
        originalAmt = tAmt;
        $("#presTableBody").html(rowhtml);
        $('#fTotal').html(tAmt.toLocaleString());
        $('#tAmt').val(tAmt.toLocaleString());
    }
}