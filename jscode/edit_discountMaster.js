    var loadDiscountDetails = details => {

        $('#discount').val(details.discount);


        $('#discountTypee').html(userroleList);
        $('#branchIde').html(branchList);

        $('.select2').select2({
            placeholder: 'select Branch'


        });

        $('#branchIde').val(details.branchId).trigger('change');
        $('#discountTypee').val(details.discountType).trigger('change');
    };
    loadDiscountDetails(discount_details);