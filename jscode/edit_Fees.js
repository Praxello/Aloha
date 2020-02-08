const loadFeesDetails = details => {
 
    $('#feesType').val(details.feesType);
    $('#fee').val(details.fee); 
 
    $('#userIde').val(details.userId).trigger('change');
    $('#userIde').html(DocList);
 
    $('.select2').select2({
        placeholder:'select',
        allowClear:true,
        async : false,
        dropdownParent: $('#feesMasterForm'),
       
    });
};
loadFeesDetails(fees_details);
