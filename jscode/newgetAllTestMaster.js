var testes = new Map();
var test_details = {};
var testId_ap = null;

const getAllTestDetails = () => {
    $.ajax({
        url: url + 'getDiaTestMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    testes.set(response.Data[i].testId, response.Data[i]);
                }
         
                listTest(testes);
            }
        }
    });
};

const listTest = testes => {
    $('#diaTestTable').dataTable().fnDestroy();
    $('#diaTestData').empty();
    var tblData = '';
    for (let k of testes.keys()) {
        let test = testes.get(k);

        tblData += '<tr><td>' + test.testName + '</td>';
        tblData += '<td>' + test.testDetails + '</td>';
        tblData += '<td>' + test.fees  + '</td>';
        // tblData += '<td>' + test.type  + '</td>';
        
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editTest(' + (k) + ')" title="Edit Test details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#diaTestData').html(tblData);
    $('#diaTestTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllTestDetails();

var editTest = (testId) => {
    testId = testId.toString();
    test_details = testes.get(testId);
    testId_ap=testId;
    console.log(testId_ap);
     $('#testDiagnosisData').hide();
     $('#TestNew').load('edit_daiTestMaster.php');
 
};
