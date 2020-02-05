$('#instructionMasterForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#instructionMasterForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('instructionId',instructionId_ap);
        console.log(instructionId_ap);
        $.ajax({
            url: url + 'update_Instruction.php',
            type: 'POST',
            data: fData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.Responsecode == 200) {
                  
                    swal({
                        position: 'top-end',
                        icon: 'success',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                    $('#instrNew').empty();
                    $('#itData').show();
                    instruction.set(response.Data.instructionId, response.Data);
                    listInstr(instruction);

                } else {
                    swal({
                        position: 'top-end',
                        icon: 'warning',
                        title: response.Message,
                        button: false,
                        timer: 1500
                    });
                }
            }
        });
    }
});