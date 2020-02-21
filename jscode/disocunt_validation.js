$(function() {
    var jvalidate = $("#discountMasterForm").validate({
        ignore: [],
        rules: {
            discountType: {
                required: true 
            },
            branchId:{
                required: true 
            }
        },
        messages: {
            discountType: {
                required: "Please Enter Discount Type" 
            },
            branchId:{
                required: "Please Select Branch" 
            }
        }
    });
}

);