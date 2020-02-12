var loadFeesDetails = details => {
 console.log(details);
 
    $('#feesType').val(details.feesType);
    $('#fee').val(details.fee); 
 
 
    $('#userIde').html(DocList);
 
    $('.select2').select2({
        placeholder:'select'
      
      
    });
    $('#userIde').val(details.doctorId).trigger('change');
};
loadFeesDetails(fees_details);
