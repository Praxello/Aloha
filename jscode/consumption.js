var transactions = new Map();

function loadConsumption(details) {
    $('#pNamee').html(details.title);
    $('#pCoste').html(details.packageCost);
    $('#purchaseDatee').html(details.purchaseDate);
    loadTransactions(details.pId);
    exchange(details.pId);
}
loadConsumption(packageDetail);

function loadTransactions(pId) {
    $.ajax({
        url: url + 'getPackageTransactions.php',
        type: 'POST',
        data: { pId: pId },
        dataType: 'json',
        success: function(response) {
            if (response.Data != null) {
                var n = response.Data.length;
                for (var i = 0; i < n; i++) {
                    transactions.set(response.Data[i].DetailId, response.Data[i]);
                }
            }
            listTransactions(transactions);
        }
    });
}

function exchange(pId) {
    $('#exchangeT').dataTable().fnDestroy();
    $('#exchangeData').empty();
    $.ajax({
        url: url + 'getExchangeTransactions.php',
        type: 'POST',
        data: { pId: pId },
        dataType: 'json',
        success: function(response) {
            var tbldata = '';
            if (response.Data != null) {
                var n = response.Data.length;
                for (var i = 0; i < n; i++) {
                    tbldata += '<tr><td>' + response.Data[i].transactionType + '</td>';
                    tbldata += '<td>' + response.Data[i].username + '</td>';
                    tbldata += '<td>' + response.Data[i].created_at + '</td></tr>';
                }
            }
            $('#exchangeData').html(tbldata);
            $('#exchangeT').dataTable();
        }
    });
}

function listTransactions(transactions) {
    $('#packageTest').dataTable().fnDestroy();
    $('#packageTestData').empty();
    var tbldata = '';
    transactions.forEach(element => {
        tbldata += '<tr><td>' + element.testName + '</td>';
        tbldata += '<td>' + element.originalQuota + '</td>';
        tbldata += '<td>' + (parseInt(element.originalQuota) - parseInt(element.consumed)) + '</td>';
        tbldata += '<td>' + element.consumed + '</td>';
        tbldata += '<td>' + element.lastUsed + '</td>';
        tbldata += '<td style="width:5%;"><button type="button" class="btn btn-icon btn-success" onclick="consumeNow(' + element.DetailId + ')" title="Click to consume"><i class="ik ik-plus"></i></button></td></tr>';
    });
    $('#packageTestData').html(tbldata);
    $('#packageTest').dataTable();
}

function consumeNow(detailId) {
    detailId = detailId.toString();
    if (transactions.has(detailId)) {
        let transaction = transactions.get(detailId);
        $.ajax({
            url: url + 'consumeTransaction.php',
            type: 'POST',
            data: { detailId: detailId, userId: data.userId },
            dataType: 'json',
            success: function(response) {
                if (response.Responsecode == 200) {
                    transaction.consumed = parseInt(transaction.consumed + 1);
                    transactions.set(detailId, transaction);
                }
                listTransactions(transactions);
            }
        });
    }
}

function fromBack() {
    $('.load-pack').empty();
    $('.s').show();
}