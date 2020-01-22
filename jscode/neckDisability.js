$('#neckForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#neckForm").valid();
    if (returnVal) {


        var painObj = getpainIntensity_1();
        var perObj = getpersonalCare_1();
        var liftObj = getlifting_1();
        var workObj = getwork();
        var headObj = getheadaches();
        var conObj = getconcentration();
        var sleepObj = getsleeping_1();
        var driveObj = getdriving();
        var readObj = getreading();
        var recObj = getrecreation();

        console.log(painObj);


        painObj = JSON.stringify(painObj);
        perObj = JSON.stringify(perObj);
        liftObj = JSON.stringify(liftObj);
        workObj = JSON.stringify(workObj);
        headObj = JSON.stringify(headObj);
        conObj = JSON.stringify(conObj);
        sleepObj = JSON.stringify(sleepObj);
        driveObj = JSON.stringify(driveObj);
        readObj = JSON.stringify(readObj);
        recObj = JSON.stringify(recObj);


        //   console.log(ob);                                                                                                                                                  
        $.ajax({
            url: url + 'insertNeckDisability.php',
            type: 'POST',
            data: {
                painIntensity: painObj,
                personalCare: perObj,
                lifting: liftObj,
                work: workObj,
                headaches: headObj,
                concentration: conObj,
                sleeping: sleepObj,
                driving: driveObj,
                reading: readObj,
                recreation: recObj

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

const getpainIntensity_1 = () => {
    var painObj = {};
    $.each($("input[name='painIntensity']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            painObj[value] = flag;
        } else {
            painObj[value] = flag;
        }

    });
    return painObj;
}

const getpersonalCare_1 = () => {
    var perObj = {};
    $.each($("input[name='personalCare']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            perObj[value] = flag;
        } else {
            perObj[value] = flag;
        }

    });
    return perObj;
}

const getlifting_1 = () => {
    var liftObj = {};
    $.each($("input[name='lifting']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            liftObj[value] = flag;
        } else {
            liftObj[value] = flag;
        }

    });
    return liftObj;
}

const getwork = () => {
    var workObj = {};
    $.each($("input[name='work']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            workObj[value] = flag;
        } else {
            workObj[value] = flag;
        }

    });
    return workObj;
}

const getheadaches = () => {
    var headObj = {};
    $.each($("input[name='headaches']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            headObj[value] = flag;
        } else {
            headObj[value] = flag;
        }

    });
    return headObj;
}

const getconcentration = () => {
    var conObj = {};
    $.each($("input[name='concentration']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            conObj[value] = flag;
        } else {
            conObj[value] = flag;
        }

    });
    return conObj;
}

const getsleeping_1 = () => {
    var sleepObj = {};
    $.each($("input[name='sleeping']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            sleepObj[value] = flag;
        } else {
            sleepObj[value] = flag;
        }

    });
    return sleepObj;
}
const getdriving = () => {
    var driveObj = {};
    $.each($("input[name='driving']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            driveObj[value] = flag;
        } else {
            driveObj[value] = flag;
        }

    });
    return driveObj;
}
const getreading = () => {
    var readObj = {};
    $.each($("input[name='reading']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            readObj[value] = flag;
        } else {
            readObj[value] = flag;
        }

    });
    return readObj;
}

const getrecreation = () => {
    var recObj = {};
    $.each($("input[name='recreation']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            recObj[value] = flag;
        } else {
            recObj[value] = flag;
        }

    });
    return recObj;
}