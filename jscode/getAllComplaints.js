var complaint = new Map();
var complaint_details = {};
var  complaintId_ap = null;

const getAllComplaints = () => {
    $.ajax({
        url: url + 'get_Complaints.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    complaint.set(response.Data[i].complaintId, response.Data[i]);
                }
         
                listcomplaint(complaint);
            }
        }
    });
};

const listcomplaint = complaint => {
    $('#comTable').dataTable().fnDestroy();
    $('#complaintData').empty();
    var tblData = '';
    for (let k of complaint.keys()) {
        let compl = complaint.get(k);

        tblData += '<tr><td>' + compl.complaintId + '</td>';
        tblData += '<td>' + compl.complaint + '</td>';
      
 
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editComplaints(' + (k) + ')" title="Edit complaints details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#complaintData').html(tblData);
    $('#comTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getAllComplaints();

const editComplaints = (complaintId) => {
    complaintId = complaintId.toString();
    complaint_details = complaint.get(complaintId);
    complaintId_ap= complaintId;
    console.log(complaintId_ap);
    $('#complaintsData').hide();
    $('#complaintNew').load('edit_Complaint_Master.php');

};
