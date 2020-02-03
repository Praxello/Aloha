var payments = new Map();
var sendPaymentId = null;
var editPaymentDetails = null;
var paymentDetails = patientId => {
    $('#opdPayment').dataTable().fnDestroy();
    $('#opdPaymentData').empty();
    $.ajax({
        url: url + 'getPaymentDetails.php',
        type: 'POST',
        data: { patientId: patientId },
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        payments.set(response.Data[i].paymentId, response.Data[i]);
                    }
                }
            }
            showPatientInfo(patientId);
            listpaymentdetails(payments);
        }
    });
};

var listpaymentdetails = payments => {
    $('#opdPayment').dataTable().fnDestroy();
    $('#opdPaymentData').empty();
    var tblData = '';
    for (let k of payments.keys()) {
        let payment = payments.get(k);
        tblData += '<tr><td>' + payment.paymentId + '</td>';
        tblData += '<td>' + payment.username + '</td>';
        tblData += '<td>' + payment.originalAmt.toLocaleString() + '</td>';
        tblData += '<td>' + payment.total.toLocaleString() + '</td>';
        tblData += '<td>' + payment.discount.toLocaleString() + '</td>';
        tblData += '<td>' + payment.received.toLocaleString() + '</td>';
        tblData += '<td>' + payment.pending.toLocaleString() + '</td>';
        tblData += '<td>' + getDate(payment.visitDate) + '</td>';
        if (payment.pending > 0) {
            tblData += '<td><a href="#" onclick="makePayment(' + k + ')" title="Edit payments details"><i class="ik ik-edit-2 text-blue" ></i></a></td>';
        } else {
            tblData += '<td></td>';
        }
        tblData += '</tr>';
    }
    $('#opdPaymentData').html(tblData);
    $('#opdPayment').DataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('#opdPayment tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7, 8] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
var makePayment = paymentId => {
    paymentId = paymentId.toString();
    let payment = payments.get(paymentId);
    sendPaymentId = paymentId;
    editPaymentDetails = payment;
    $('#receiptId').html(paymentId);
    $('#received').html(payment.received);
    $('#billamount').val(payment.originalAmt);
    $('#discount').val(payment.discount);
    $('#pendingAmt').val(payment.pending);
    $('#amount').val(payment.pending);
    $('#prButton').show();
};

var showPatientInfo = patientId => {
    patientId = patientId.toString();
    let details = patients.get(patientId);
    $('#pid').html(details.patientId);
    $('#pname').html(details.firstName + ' ' + details.middleName + ' ' + details.surname);
    $('#pmobile').html(details.mobile1);
    $('#pemail').html(details.email);
    $('#pcity').html(details.city);
    $('#paddress').html(details.address);
};

var recievePayment = () => {
    const details = {
        paymentMode: $('#paymentMode').val(),
        paymentId: sendPaymentId,
        pending: $('#pendingAmt').val(),
        receivedBy: data.username,
        received: $('#amount').val(),
        paymentDetails: $('#paymentDetails').val()
    };
    $.ajax({
        url: url + 'updateOpdPayment.php',
        type: 'POST',
        data: details,
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
                editPaymentDetails.pending = editPaymentDetails.pending - details.received;
                payments.set(editPaymentDetails.paymentId, editPaymentDetails);
                listpaymentdetails(payments);
                $('#makePayment').trigger('reset');
            } else {
                swal({
                    position: 'top-end',
                    icon: 'warning',
                    title: response.Message,
                    button: false,
                    timer: 1500
                });
            }
        }
    });
};

function checkPaymentMode(mode) {
    if (mode == 'Cash') {
        $('#paymentD').hide();
    } else {
        $('#paymentD').show();
    }
}

function printReciept() {
    if (sendPaymentId != null) {
        var url = 'apis/payment-reciept.php?paymentId=' + sendPaymentId;
        window.open(url, '_blank');
    }
}

function check(input) {
    var amount = parseFloat(document.getElementById("amount").value);
    var pendingAmt = parseFloat(document.getElementById("pendingAmt").value);
    if (amount <= pendingAmt) {
        $('.errorMsg').html('');
    } else {
        input.value = pendingAmt;
        $('.errorMsg').html('<font color="red" style="margin-left: 148px;">Can not exceed amount limit ' + pendingAmt + '</font>');
    }
}