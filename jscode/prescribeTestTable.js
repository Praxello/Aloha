var rowhtml, rowid = 0;
var uniqueTest = new Set();
var tAmt = 0.00;
var originalAmt = 0.00;
var totalDiscount = 0;
getDiscounts(data.branchId);

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
            $('#tAmt').val(tAmt);
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
    var total, formula;
    if (totalDiscount > 0) {
        if (amount == '') {
            $('#tAmt').val(tAmt);
            $('#pAmt').val('');
        } else {
            if (amount > totalDiscount) {
                swal('can not exceed discount more than ' + totalDiscount);
                $('#dAmt').val(totalDiscount);
                formula = (tAmt * totalDiscount) / 100;
                $('#tAmt').val(tAmt - formula);
            } else {
                amount = parseFloat(amount);
                total = parseFloat(tAmt);
                formula = (total * amount) / 100;
                $('#tAmt').val(tAmt - formula);
                $('#pAmt').val(formula.toFixed(2));
            }
        }
    } else {
        if (amount == '') {
            $('#tAmt').val(tAmt);
            $('#pAmt').val('');
        } else {
            amount = parseFloat(amount);
            total = parseFloat(tAmt);
            formula = (total * amount) / 100;
            $('#tAmt').val(tAmt - formula);
            $('#pAmt').val(formula.toFixed(2));
        }
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
    var jvalid = $('#paymentForm').valid();
    if (jvalid) {
        var len = $('#presTable tr').length;
        if (len > 2) {
            var discount = parseFloat($('#dAmt').val());
            if (discount == '') {
                discount = 0;
            }
            var packageId = null,
                flag = 0;
            if ($('#packageIds').val() != '') {
                packageId = $('#packageIds').val();
                flag = 1;
            }
            var packageDetails = {
                packageId: packageId,
                flag: flag,
                isActive: 1,
                packageDuration: 10,
                packageCost: tAmt
            };
            var details = {
                userId: data.userId,
                branchId: data.branchId,
                billDetails: storeDetails(),
                amount: parseFloat($('#tAmt').val()),
                originalAmt: originalAmt,
                discount: discount,
                doctorId: $('#paymentFor').val(),
                patientId: patientId_ap
            };
            details = JSON.stringify(details);
            $.ajax({
                url: url + 'generatePayment.php',
                type: 'POST',
                data: { postdata: details, packageDetails: packageDetails },
                dataType: 'json',
                success: function(response) {
                    if (response.Responsecode == 200) {
                        swal({
                            position: 'top-end',
                            icon: 'success',
                            title: response.Message,
                            button: false,
                            timer: 1500
                        });
                        prevTransactions.set(response.Data.paymentId, response.Data);
                        list_transactions(prevTransactions);
                        uniqueTest.clear();
                        $('#presTableBody').empty();
                        $('#fTotal').empty();
                        var r = confirm('Do you want to accept payment now ?');
                        if (r) {
                            $('#opd-payment-generate').modal('hide');
                            opdPayment(patientId_ap);
                        }
                    } else {
                        swal({
                            position: 'top-end',
                            icon: 'warning',
                            title: response.Message,
                            button: true

                        });
                    }

                }
            });
        } else {
            swal({
                position: 'top-end',
                icon: 'warning',
                title: 'Add Test first',
                button: false,
                timer: 1500
            });
        }
    }
}

function attach_data(paymentId) {
    paymentId = paymentId.toString();
    let data = prevTransactions.get(paymentId);
    var rowhtml = '',
        rowid = 0,
        T = 0;
    tAmt = 0;
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
        $('#dAmt').val(data.discount);
        $('#fTotal').html(tAmt.toLocaleString());
        $('#tAmt').val(tAmt);
        $('#paymentFor').val(data.doctorId).trigger('change');
    }
}



function setDiscount(Id) {
    if (Id == "") {

    } else {
        Id = Id.toString();
        let discount = discounts.get(Id);
        totalDiscount = parseFloat(discount.discount);
        $('#maxDiscount').html('Maximum discount ' + totalDiscount + '%');
    }
}

function openScreen() {
    $('#opd-payment-generate').modal('hide');
    opdPayment(patientId_ap);
}

$('input:radio[name=radio]').change(function() {
    if (this.value == '1') {
        $('.package').hide();
        $('.opd').show();
        $('#headTitle').text('Amount');
        $('#presTableBody').empty();
        $('#fTotal').html('');
        $('#paymentFor').val('').trigger('change');
        tAmt = 0;
        $('#tAmt').val('');
    } else if (this.value == '0') {
        $('.package').show();
        $('.opd').hide();
        $('#headTitle').text('Quota');
        $('#presTableBody').empty();
        $('#fTotal').html('');
        $('#packageIds').val('').trigger('change');
    }
});