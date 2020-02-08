var advice = new Map();
var advice_details = {};
var adviceId_ap = null;

const getAllAdvice = () => {
    $.ajax({
        url: url + 'get_Advice.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    advice.set(response.Data[i].adviceId, response.Data[i]);
                }
         
                listAdvice(advice);
            }
        }
    });
};

const listAdvice = advice => {
    $('#adviceTable').dataTable().fnDestroy();
    $('#adviceData').empty();
    var tblData = '';
    for (let k of advice.keys()) {
        let ad = advice.get(k);

        tblData += '<tr><td>' + ad.adviceId + '</td>';
        tblData += '<td>' + ad.advice + '</td>';
      
 
      
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editAdvice(' + (k) + ')" title="Edit advice details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }
    $('#adviceData').html(tblData);
    $('#adviceTable').dataTable({
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
getAllAdvice();

const editAdvice = (adviceId) => {
    adviceId = adviceId.toString();
    advice_details = advice.get(adviceId);
    adviceId_ap= adviceId;
    console.log(adviceId_ap);
    $('#adData').hide();
    $('#adviceNew').load('edit_AdviceMaster.php');

};
function gobackAdvice(){
    $('#adData').show();
    $('#adviceNew').empty();
}