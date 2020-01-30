var branches = new Map();
var branch_details = {};
var branchId_ap = null;
var global_date = moment().format('YYYY-MM-DD');
const getAllBranches = () => {
    $.ajax({
        url: url + 'getAllBranchMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    branches.set(response.Data[i].branchId, response.Data[i]);
                }
         
                listBranches(branches);
            }
        }
    });
};

const listBranches = branches => {
    $('#bTable').dataTable().fnDestroy();
    $('#branchData').empty();
    var tblData = '';
    for (let k of branches.keys()) {
        let branch = branches.get(k);

        tblData += '<tr><td>' + branch.branchId + '</td>';
        tblData += '<td>' + branch.branchName + '</td>';
  
        tblData += '<td>' + branch.branchAddress  + '</td>';
        tblData += '<td>' + branch.mobile1 + '</td>';
        tblData += '<td>' + branch.fax + '</td>';
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editBranch(' + (k) + ')" title="Edit branch details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#branchData').html(tblData);
    $('#bTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllBranches();

const editBranch = (branchId) => {
    branchId = branchId.toString();
    branch_details = branches.get(branchId);
    branchId_ap= branchId;
    console.log(branchId_ap);
    $('#newData').hide();
    $('#editbranchNew').load('edit_Branch_Profile.php');
 
};
