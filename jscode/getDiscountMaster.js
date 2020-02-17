var discounts = new Map();
var discount_details = {};
var discountId_np = {};

var global_date = moment().format('YYYY-MM-DD');
const getAllDiscount = () => {
    $.ajax({
        url: url + 'getDiscountMaster.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    discounts.set(response.Data[i].discountId, response.Data[i]);
                }
         
                listDiscount(discounts);
            }
        }
    });
};

const listDiscount = discounts => {
    $('#disTable').dataTable().fnDestroy();
    $('#discountData').empty();
    var tblData = '';
    for (let k of discounts.keys()) {
        let discount = discounts.get(k);

        // tblData += '<tr><td>' + discount.discountId + '</td>';
       tblData += '<tr><td>' + discount.discountType + '</td>';
      
        tblData += '<td>' + discount.discount + '</td>';
        tblData += '<td>' + discount.createdAt + '</td>';
        // tblData += '<td>' + discount.branchId + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editDiscount(' + (k) + ')" title="Edit Discount details"><i class="ik ik-edit text-blue"></i></a>';
    
        tblData += '</div></td></tr>';
    }

    $('#discountData').html(tblData);
    $('#disTable').dataTable({
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
getAllDiscount();

const editDiscount = (discountId) => {
    discountId = discountId.toString();
    discount_details = discounts.get(discountId);
    discountId_np = discountId;
    $('#newFees').hide();
    $('#editfeesNew').load('edit_discount_master.php');
};



function gobackDiscount(){
    $('#newFees').show();
    $('#editfeesNew').empty();
}