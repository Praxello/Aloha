var rowhtml, rowid = 0;
var uniqueTest = new Set();
var tAmt = 0.00;
var originalAmt = 0.00;
var totalDiscount = 0;
var updateFlag = 0;
var updatePaymentId = null;
var global_date = moment().format('YYYY-MM-DD');
var flag = 0;
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
            rowhtml += '<td style="display:none;">' + tests.testId + '</td>';
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
    $('#fTotal').html(tAmt.toLocaleString());
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
                swal('Please seek approval for exceeded discount ' + amount);
                $('#dAmt').val(amount);
                formula = (tAmt * amount) / 100;
                $('#tAmt').val(tAmt - formula);
                $('#pAmt').val(formula.toFixed(2));
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
        var testId = $(tr).find('td:eq(0)').text();
        var feesType = $(tr).find('td:eq(1)').text();
        var fees = $(tr).find('td:eq(2)').text();

        TableData[row] = {
            "testId": testId,
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
            var discountType = $('#discountType').val();
            if (discountType == '') {
                discountType = 'NULL';
            }
            var packageId = null;

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
                patientId: patientId_ap,
                discountType: discountType,
                visitDate: global_date
            };
            var updateDetails = {
                uFlag: updateFlag,
                paymentId: updatePaymentId,
                recieved: parseFloat($('#receivedP').text())
            };
            details = JSON.stringify(details);
            $.ajax({
                url: url + 'generatePayment.php',
                type: 'POST',
                data: { postdata: details, packageDetails: packageDetails, uFlag: updateDetails },
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
                        if (updateFlag == 1) {

                            updatePaymentId = updatePaymentId.toString();
                            if (prevTransactions.has(updatePaymentId)) {

                                prevTransactions.delete(updatePaymentId);
                            }
                        }
                        updateFlag = 0;

                        prevTransactions.set(response.Data.paymentId, response.Data);
                        list_transactions(prevTransactions);
                        uniqueTest.clear();
                        $('#presTableBody').empty();
                        $('#fTotal').empty();
                        $('#paymentForm').trigger('reset');
                        $('#discountType').val('').trigger('change');
                        $('#test').val('').trigger('change');
                        $('#paymentFor').val('').trigger('change');
                        tAmt = 0;
                        $('#maxDiscount').html('');
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
    updatePaymentId = paymentId;
    updateFlag = 1;
    paymentId = paymentId.toString();
    let data = prevTransactions.get(paymentId);
    console.log(data);
    global_date = data.visitDate;
    var rowhtml = '',
        rowid = 0,
        T = 0;
    tAmt = 0;
    if (data.billdetails != null) {
        var count = data.billdetails.length;
        for (var i = 0; i < count; i++) {
            T = data.billdetails[i].testId;
            uniqueTest.add(T);
            rowid += 1;
            rowhtml += '<tr id="row' + rowid + '">';
            rowhtml += '<td style="display:none;">' + data.billdetails[i].testId + '</td>';
            rowhtml += '<td>';
            rowhtml += data.billdetails[i].feesType;
            rowhtml += '</td>';
            rowhtml += '<td>';
            rowhtml += data.billdetails[i].fees;
            rowhtml += '</td>';
            if (data.isPackage == 1) {
                rowhtml += '<td></td>';
            } else {
                rowhtml += '<td><button type="button" class="btn btn-icon btn-danger" onclick="deleterow(' + rowid + ',' + (T) + ')" ><i class="ik ik-minus"></i></button></td>';
            }
            rowhtml += '</tr>';
            tAmt = parseFloat(data.billdetails[i].fees) + tAmt;
        }
        originalAmt = tAmt;
        console.log(originalAmt);
        if (data.isPackage == 1) {
            flag = 1;
            tAmt = data.originalAmt;
            $('#headTitle').text('Quota');
            $('.opd').hide();
            $('#chP').prop('checked', true);
            $('.package').show();
            $('#packageIds').val(data.packageId).trigger('change');
        }
        $("#presTableBody").html(rowhtml);
        $('#discountType').val(data.discountType).trigger('change');
        $('#dAmt').val(data.discount).trigger('change');
        $('#fTotal').html(tAmt.toLocaleString());
        $('#tAmt').val(data.total);
        $('#paymentFor').val(data.doctorId).trigger('change');
        $('#total').html(data.total);
        $('#receivedP').html(data.received);
    }
}



function setDiscount(Id) {
    if (Id != "") {
        Id = Id.toString();
        let discount = discounts.get(Id);
        totalDiscount = parseFloat(discount.discount);
        $('#maxDiscount').html('Maximum discount ' + totalDiscount + '%');
        $('#dAmt').val('');
        $('#pAmt').val('');
        $('#tAmt').val(tAmt);
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
        tAmt = 0;
    } else if (this.value == '0') {
        $('.package').show();
        $('.opd').hide();
        $('#headTitle').text('Quota');
    }
    updateFlag = 0;
    flag = 1;
    uniqueTest.clear();
    $('#presTableBody').empty();
    $('#fTotal').html('');
    $('#paymentFor').val('').trigger('change');
    $('#dAmt').val('');
    $('#pAmt').val('');
    $('#tAmt').val('');
    $('#total').html('');
    $('#packageIds').val('').trigger('change');
    $('#discountType').val('').trigger('change');
    $('#maxDiscount').html('');
});