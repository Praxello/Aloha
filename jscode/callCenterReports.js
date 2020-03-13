var ref = [];


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
    titleArray = [];
    Ramt = [];
    category = [];
    follow = [];
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
                 
                    category.push(parseInt(response.Data[i].cnt));
                    titleArray.push(response.Data[i].username);
                    follow.push(parseInt(response.Data[i].followUps));
                }
                consultData.push({ name: 'Calls attended', data: category });
              consultData.push({ name: 'Total Followups', data: follow });
            
        
            }
            chart_consult(consultData,titleArray);
        }
    });
};

const citiesRecord = (fromDate, uptoDate) => {
    cityname = [];
    Ramt = [];
    callsCity = [];
    cityName = [];
    cityData = [];
    $.ajax({
        url: url + 'citiesWiseRecords.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                 
                    callsCity.push(parseInt(response.Data[i].cnt1));
                    cityName.push(response.Data[i].name);
         
                }
                cityData.push({ name: 'City', data: callsCity });
            //   consultData.push({ name: 'Total Followups', data: follow });
            
        
            }
            city_chart(cityData,cityName);
        }
    });
};



const stateRecord = (fromDate, uptoDate) => {
    statename = [];
    Ramt = [];
    callsState = [];
    stateName = [];
    stateData = [];
    $.ajax({
        url: url + 'statewiserecord.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                 
                    callsState.push(parseInt(response.Data[i].cnt2));
                    stateName.push(response.Data[i].name);
                    //follow.push(parseInt(response.Data[i].followUps));
                }
                stateData.push({ name: 'State', data: callsState });
            //   consultData.push({ name: 'Total Followups', data: follow });
            
        
            }
           state_chart(stateData,stateName);
        }
    });
};



const countryRecord = (fromDate, uptoDate) => {
  
    callsCountry = [];
    countryName = [];
    countryData = [];
    $.ajax({
        url: url + 'countryWiseRecord.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                 
                    callsCountry.push(parseInt(response.Data[i].cnt3));
                    countryName.push(response.Data[i].name);
                    //follow.push(parseInt(response.Data[i].followUps));
                }
                countryData.push({ name: 'Country', data: callsCountry });
            //   consultData.push({ name: 'Total Followups', data: follow });
            
        
            }
            country_chart(countryData,countryName);
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

function mapCity() {
    var dropdownList = '<option></option>';
    for (let key of city.keys()) {
        dropdownList += '<option value="' + key + '">' + city.get(key) + '</option>';
    }
    $('#city').html(dropdownList);
    console.log(dropdownList);
}
$(document).ready(function() {
    mapCity();
    $("#city").select2({
        placeholder: 'Select city',
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

        callfollowupRecord(fromDate,uptoDate);
        // citiesRecord(fromDate,uptoDate); 
        // stateRecord(fromDate,uptoDate); 
        // countryRecord(fromDate,uptoDate); 
    }
});

$('#cityselect').on('click', function(e) {
    e.preventDefault();
    stateRecord(fromDate,uptoDate); 
});

// function printReciept(paymentId) {

//     $('<form action="payment-reciept.php" method="POST" target="_blank"><input type="hidden" name="ppaymentId" value="' + paymentId + '" /></form>').appendTo('body').submit();
// }
getCallCenterReports(data.today, data.today);

callfollowupRecord(fromDate,uptoDate);
citiesRecord(fromDate,uptoDate); 
stateRecord(fromDate,uptoDate); 
countryRecord(fromDate,uptoDate); 

function chart_consult(seriesData, categories) {
    Highcharts.chart('callfeedback', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Employee wise calls & followup'
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

            headerFormat: '<span style="font-size:10px">{point.x}</span><table>',
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


function city_chart(seriesData, categories) {
    Highcharts.chart('cityes', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'city wise'
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

            headerFormat: '<span style="font-size:10px">{point.x}</span><table>',
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


function state_chart(seriesData, categories) {
                                                    
    Highcharts.chart('states', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'State wise'
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

            headerFormat: '<span style="font-size:10px">{point.x}</span><table>',
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

function country_chart(seriesData, categories) {
                                                    
    Highcharts.chart('countries', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Country wise'
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

            headerFormat: '<span style="font-size:10px">{point.x}</span><table>',
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
function callFunction(params){
    if(params==1){
        console.log("hiii");
        citiesRecord(fromDate,uptoDate); 
    }
    else if(params==2){

    }
    else{
        
    }

    
}