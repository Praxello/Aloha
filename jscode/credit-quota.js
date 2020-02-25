$('#creditQuotaForm').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: url + 'credit-quota.php',
        type: 'POST',
        data: {
            detailId: detailId_u,
            typeCount: $('#typeCount').val(),
            remark: $('#quotaRemark').val(),
            userId: data.userId
        },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: response.Message,
                    button: false,
                    timer: 1500
                });
                $('#creditQuota').modal('hide');
                $('#creditQuotaForm').trigger('reset');
                let transaction = transactions.get(detailId_u);
                let originalQuota = parseInt(transaction.originalQuota);
                console.log(originalQuota);
                originalQuota = originalQuota + parseInt($('#typeCount').val());
                transaction.originalQuota = originalQuota;
                transactions.set(detailId_u, transaction);
                console.log(transactions);
                if (response.Data != null) {
                    exchangeT.set(response.Data.transactionId, response.Data);
                    exchange_list(exchangeT);
                }
                listTransactions(transactions);
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
});