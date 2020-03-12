var ref=[];

const getCallCenterReports = (fromDate, uptoDate, branch) => {
    $.ajax({
        url: url + 'getCallReports.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate, branchId: branch },
        success: function(response) {
            console.log(response);
            $('#callReportT').dataTable().fnDestroy();
            $('#callReportD').empty();
            var tblData = '',
                badge = '',                                                                                         
                amtO = 0,
                amtR = 0,
                amtT = 0,
                amtP = 0;
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    let callR = response.Data[i];
                    // if (callR.isPackage == 0) {
                    //     badge = 'OPD';
                    // } else {
                    //     badge = 'Package';
                    // }
                    // amtO = amtO + parseFloat(collect.amount);
                    // amtR = amtR + parseFloat(collect.received);
                    // amtP = amtP + parseFloat(collect.pending);
                    // amtT = amtT + parseFloat(collect.total);
                    // tblData += '<tr><td>' + collect.recieptId + ' </td><td>' + collect.visitDate + ' </td><td>' + collect.firstName + ' ' + collect.surname + '</td>';
                    tblData += '<tr><td>' + callR.clientId + '</td>';
                    tblData += '<td>' + callR.firstName + ' ' + callR.lastName + '</td>';
                    tblData += '<td>' + callR.branchName + '</td>';
                    tblData += '<td>' + callR.nearByArea + '</td>';
                    
                    tblData += '<td>' + callR.reference + '</td>';
                  
                    tblData += '<td>' + callR.appointmentDate + '</td>';
                    tblData += '<td>' + callR.username + '</td>';
                    tblData += '<td>' + callR.feedback + '</td>';
                    tblData += '<td>' + callR.createdAt + '</td>';
                    
                    tblData += '<td><div class="table-actions" style="text-align: left;">';
                     tblData += '<a href="#" onclick="printReciept(' + (callR.clientId) + ')" title="print reciept"><i class="fa fa-download text-blue"></i></a>';
                    tblData += '</div></td></tr>';
                }
            }
            $('#callReportD').html(tblData);
           
            $('#callReportT').dataTable({
                searching: true,
                retrieve: true,
                bPaginate: $('tbody tr').length > 10,
                order: [],
                columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] }],
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf'],
                destroy: true
            });
        }
    });
};
const callfollowupRecord = (fromDate, uptoDate) => {
    Tamt = [];
    Ramt = [];
    newR = [];
    category = [];
    bPatient = [];
    penamt = [];
    consultData = [];
    $.ajax({
        url: url + 'callfollowup.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    category.push(response.Data[i].cnt);
                   Tamt.push(response.Data[i].username);
                    // Ramt.push(parseFloat(response.Data[i].amount));
                    // newR.push(parseInt(response.Data[i].newR));
                    // bPatient.push(parseInt(response.Data[i].billedP));
                    // penamt.push(parseInt(response.Data[i].pending));
                }
                consultData.push({ name: 'call attended', data: Tamt });
                // consultData.push({ name: 'Billed Patient', data: bPatient });
                // consultData.push({ name: 'Total Amount', data: Tamt });
                // consultData.push({ name: 'Recieved Amount', data: Ramt });
                // consultData.push({ name: 'Pending Amount', data: penamt });
            }
            chart_consult(consultData, Tamt);
        }
    });
};
const callReference = (fromDate, uptoDate) => {
    ref = [];
   
    consultData = [];
    $.ajax({
        url: url + 'referenceWise.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    category.push(response.Data[i].reference);
                //    Tamt.push(parseInt(response.Data[i].attendedBy));
           
                }
                consultData.push({ name: 'Reference', data: category });
             
            }
            chart_ref(consultData, category);
        }
    });
};



function mapBranches() {
    var dropdownList = '<option></option>';
    for (let k of branch.keys()) {
        dropdownList += '<option value="' + k + '">' + branch.get(k) + '</option>';
    }
    $('#branch').html(dropdownList);
}
$(document).ready(function() {
    mapBranches();
    $("#branch").select2({
        placeholder: 'Select branch',
        allowClear: true
    });
});


$('#searchCollection1').on('click', function(e) {
    e.preventDefault();
    $("#callRegister1").validate({
        ignore: [],
        rules: {
            uptoDate: {
                required: true,
            },
            fromDate: {
                required: true
            },
        },
        messages: {
            fromDate: {
                required: "Select from Date"
            },
            uptoDate: {
                required: "Select upto Date"
            },
        }
    });
    var returnVal = $("#callRegister1").valid();
    if (returnVal) {
        var branch = null;
        var fromDate = moment($('#fromDate').val()).format('YYYY-MM-DD');
        var uptoDate = moment($('#uptoDate').val()).format('YYYY-MM-DD');
        if ($('#branch').val() != '') {
            branch = $('#branch').val();
        }
        getCallCenterReports(fromDate, uptoDate, branch);
     
        callfollowupRecord(fromDate, uptoDate);
        callReference(fromDate, uptoDate);
    }
});

// function printReciept(paymentId) {
   
//     $('<form action="payment-reciept.php" method="POST" target="_blank"><input type="hidden" name="ppaymentId" value="' + paymentId + '" /></form>').appendTo('body').submit();
// }
getCallCenterReports(data.today, data.today);



function chart_consult(seriesData, categories) {
    Highcharts.chart('callfeedback', {
        chart: {
            type: 'column'                  
        },
        title: {
            text: 'Employee wise followup'
        },
        xAxis: {
            categories: categories,
            crosshair: true
        },
        yAxis: {
            allowDecimals: true,
        min: 0,
        title: {
            text: 'Number of count'
        }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: seriesData
    });
}
function chart_ref(seriesData, categories) {
    Highcharts.chart('refer', {
        chart: {
            type: 'column'                  
        },
        title: {
            text: 'Refrence'
        },
        xAxis: {
            categories: categories,
            crosshair: true
        },
        yAxis: {
            min: 0,
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: seriesData
    });
}