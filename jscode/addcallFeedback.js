$('#takeFeedback').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();


    var feedback = document.getElementById('feedbacknew').value;


    $.ajax({
        url: url + 'updateFeedback.php',
        type: 'POST',
        data: {
            callId: up_callId,
            feedback: feedback
        },
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {

                swal({
                    position: 'top-end',
                    icon: 'success',
                    title: response.Message,
                    button: false,
                    timer: 1500
                });
                $('#takeFeedback').modal('hide');

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

});