var loadDiscountDetails = details => {
    console.log(details);
    
       $('#discount').val(details.discount);
       $('#createdAte').val(details.createdAt); 
    
       $('#discountTypee').html(userroleList);
       $('#branchIde').html(branchList);
    
       $('.select2').select2({
           placeholder:'select Branch'
         
         
       });
       
       $('#branchIde').val(details.branchId).trigger('change');
       $('#discountTypee').val(details.discountType).trigger('change');
   };
   loadDiscountDetails(discount_details);
   