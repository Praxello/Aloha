$('#exerciseForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
  
    var returnVal = $("#exerciseForm").valid();
    if (returnVal) {
        var fData = new FormData(this);
        fData.append('id',exercise_ap);
        console.log( exercise_ap);
        $.ajax({
            url: url + 'update_exercise_chart.php',
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
                    $('#idEXE').empty();
                    $('#exData').show();
                    exercise.set(response.Data.id,response.Data);
                    listexercise(exercise);
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