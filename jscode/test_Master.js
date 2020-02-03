var testes = new Map();
var test_details = {};
var testId_ap = null;
// var global_date = moment().format('YYYY-MM-DD');
const getAllTest = () => {
    $.ajax({
        url: url + 'getAllTestMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    testes.set(response.Data[i].testId,response.Data[i]);
                }
         
                listTestes(testes);
            }
        }
    });
};

const listTestes = testes => {
    $('#tTable').dataTable().fnDestroy();
    $('#testRecord').empty();
    var tblData = '';
    for (let k of testes.keys()) {
        let test = testes.get(k);

        tblData += '<td>' + test.testName + '</td>';
        tblData += '<td>' + test.testDetails + '</td>';
        tblData += '<td>' + test.fees + '</td>';
        tblData += '<td>' + test.type + '</td>';
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editTest(' + (k) + ')" title="Edit test details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#testRecord').html(tblData);
    $('#tTable').dataTable({
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
getAllTest();

// const editBranch = (branchId) => {
//     branchId = branchId.toString();
//     branch_details = branches.get(branchId);
//     branchId_ap= branchId;
//     console.log(branchId_ap);
//     $('#newData').hide();
//     $('#editbranchNew').load('edit_Branch_Profile.php');
 
// };
