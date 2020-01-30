const loadFeesDetails = details => {

    $('#feesType').val(details.feesType);
    $('#fee').val(details.fee); 
   
};
loadFeesDetails(fees_details);
