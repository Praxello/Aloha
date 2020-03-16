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

                    tblData += '<td><div class="table-actions" style="display:none;">';
                  //  tblData += '<a href="#" onclick="printReciept(' + (callR.clientId) + ')" title="print reciept"><i class="fa fa-download text-blue"></i></a>';
                    tblData += '</div></td></tr>';
                }
            }
            $('#callReportD').html(tblData);

            $('#callReportT').dataTable({
             
                    initComplete: function() {
                        this.api().columns().every(function() {
                            var column = this;
                            var select = $('<select><option value=""></option></select>')
                                .appendTo($(column.header()).empty())
                                .on('change', function() {
                                    var val = $.fn.dataTable.util.escapeRegex(
                                        $(this).val()
                                    );
    
                                    column
                                        .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                                });
    
                            column.data().unique().sort().each(function(d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                        });
                    },
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
       
                }
                countryData.push({ name: 'Country', data: callsCountry });

            
        
            }
            country_chart(countryData,countryName);
        }
    });
};

const callReference = (fromDate, uptoDate) => {
  
    callRefCnt = [];
    referName = [];
    referData = [];
    $.ajax({
        url: url + 'callReferRecord.php',
        type: 'POST',
        dataType: 'json',
        data: { fromDate: fromDate, uptoDate: uptoDate },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                 
                    callRefCnt.push(parseInt(response.Data[i].refCnt));
                    referName.push(response.Data[i].reference);
       
                }
                referData.push({ name: 'Referance', data: callRefCnt });

            
        
            }
            ref_chart(referData,referName);
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
    console.log('hrrrrrr');
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
        citiesRecord(fromDate,uptoDate); 
        callReference(data.today,data.today)
        // stateRecord(fromDate,uptoDate); 
        // countryRecord(fromDate,uptoDate); 
    }
});
getCallCenterReports(data.today,data.today);
citiesRecord(data.today,data.today); 
$('#City').on('click', function(e) {
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
       
        citiesRecord(fromDate,uptoDate); 
        
        
     
    }
});
$('#State').on('click', function(e) {
    e.preventDefault();
    console.log('hikkkkkkkkk');
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
        

        stateRecord(fromDate,uptoDate); 
        
     
    }
});
$('#Country').on('click', function(e) {
    e.preventDefault();
    console.log('country');
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
        countryRecord(fromDate,uptoDate); 
        
     
    }
});

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
    Highcharts.chart('MyCharts', {
        chart: {
            type: 'column',
            // backgroundColor: {
            //     linearGradient: [0, 0, 450, 500],
            //     stops: [
            //       [0, 'rgb(255, 255, 255)'],
            //       [1, 'rgb(200, 200, 255)']
            //     ]
            //   },
            polar: true,
            //type: 'line'
            
        },

        legend: {
           enabled: false,
        },

        title: {
            text: 'City Wise Calls',

            style: {
                color: '#009e73',
                font: 'bold 20px Verdana, serif',
            }
        },
        xAxis: {
            
            categories: categories,
            crosshair: true,

            labels: {
                style: {
                    color: '#00664b',
                    font: 'bold 12px Verdana, serif',
                }
            },
            title: {
                text: 'City',
                style: {
                    color: '#00664b',
                    font: 'bold 12px Verdana, serif',
                    
                }
    
            }
            
        },

        
        
        yAxis: {
            allowDecimals: true,
        min: 0,

        labels: {
            style: {
                color: '#00664b',
                font: 'bold 12px Verdana, serif',
            }
        },
        title: {
            text: 'Number of Calls',
            style: {
                color: '#00664b',
                font: 'bold 12px Verdana, serif',
            }

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
                pointPadding: 0.5,
                borderWidth: 0
                
            }
            
        },

        // This code is for changeing the color of bar
        plotOptions: {
            
            series: {
                colors: [
                   
                    '#76448A',
                    '#2874A6',
                    '#9C640C', 
                       ],
                colorByPoint: true,
                dataLabels: {
                    enabled: true,
                    color:'#2874A6',
                },
                dataSorting: {
                    enabled: true
                },
            }
        },
        //*********************************************** */
        series: seriesData
    });
}


function state_chart(seriesData, categories) {
                                                    
    Highcharts.chart('MyCharts', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'State Wise Calls'
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
// This code is for changeing the color of bar
plotOptions: {
            
    series: {
        colors: [
           
            '#76448A',
            '#2874A6',
            '#9C640C', 
               ],
        colorByPoint: true
    }
},
//*********************************************** */
        series: seriesData
    });
}

function country_chart(seriesData, categories) {
                                                    
    Highcharts.chart('MyCharts', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Country Wise Calls'
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
        // This code is for changeing the color of bar
        plotOptions: {
            
            series: {
                colors: [
                   
                    '#76448A',
                    '#2874A6',
                    '#9C640C',
                       ],
                colorByPoint: true
            }
        },
        //*********************************************** */
        series: seriesData
    });
}

function  ref_chart(seriesData, categories) {
    Highcharts.chart('callRefer', {
        chart: {
            type: 'column',
            // backgroundColor: {
            //     linearGradient: [0, 0, 450, 500],
            //     stops: [
            //       [0, 'rgb(255, 255, 255)'],
            //       [1, 'rgb(200, 200, 255)']
            //     ]
            //   },
            polar: true,
            type: 'line'
            
        },

        legend: {
           enabled: false,
        },

        title: {
            text: 'Calls Reference',

            style: {
                color: '#009e73',
                font: 'bold 20px Verdana, serif',
            }
        },
        xAxis: {
            
            categories: categories,
            crosshair: true,

            labels: {
                style: {
                    color: '#00664b',
                    font: 'bold 12px Verdana, serif',
                }
            },
            title: {
                text: 'References',
                style: {
                    color: '#00664b',
                    font: 'bold 12px Verdana, serif',
                    
                }
    
            }
            
        },

        
        
        yAxis: {
            allowDecimals: true,
        min: 0,

        labels: {
            style: {
                color: '#00664b',
                font: 'bold 12px Verdana, serif',
            }
        },
        title: {
            text: 'Number of Reference',
            style: {
                color: '#00664b',
                font: 'bold 12px Verdana, serif',
            }

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
                pointPadding: 0.5,
                borderWidth: 0
                
            }
            
        },

        // This code is for changeing the color of bar
        plotOptions: {
            
            series: {
                colors: [
                   
                    '#76448A',
                    '#2874A6',
                    '#9C640C', 
                       ],
                colorByPoint: true,
                dataLabels: {
                    enabled: true,
                    color:'#2874A6',
                },
                dataSorting: {
                    enabled: true
                },
            }
        },
        //*********************************************** */
        series: seriesData
    });
}
