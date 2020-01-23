$('#backPainForm').on('submit', function(e) {
    // console.log(e);
    e.preventDefault();
    var returnVal = $("#backPainForm").valid();
    if (returnVal) {


        var painObj = getpainIntensity();
        var perObj = getpersonalCare();
        var liftObj = getlifting();
        var walkObj = getwalking();
        var sittObj = getsitting_1();
        var standObj = getstanding();
        var sleepObj = getsleeping();
        var socialObj = getsocialLife();
        var traObj = gettravel();
        var chanObj = getchangingDegreeOfPain();
        console.log(painObj);


        painObj = JSON.stringify(painObj);
        perObj = JSON.stringify(perObj);
        liftObj = JSON.stringify(liftObj);
        walkObj = JSON.stringify(walkObj);
        sittObj = JSON.stringify(sittObj);
        standObj = JSON.stringify(standObj);
        sleepObj = JSON.stringify(sleepObj);
        socialObj = JSON.stringify(socialObj);
        traObj = JSON.stringify(traObj);
        chanObj = JSON.stringify(chanObj);




        //   console.log(ob);                                                                                                                                                  
        $.ajax({
            url: url + 'insertBackPainQues.php',
            type: 'POST',
            data: {
                patientId: global_patientId,
                visitDate: global_date,
                painIntensity: painObj,
                personalCare: perObj,
                lifting: liftObj,
                walking: walkObj,
                sitting1: sittObj,
                standing: standObj,
                sleeping: sleepObj,
                socialLife: socialObj,
                travel: traObj,
                changingDegreeOfPain: chanObj



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

const getpainIntensity = () => {
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

const getpersonalCare = () => {
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

const getlifting = () => {
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

const getwalking = () => {
    var walkObj = {};
    $.each($("input[name='walking']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            walkObj[value] = flag;
        } else {
            walkObj[value] = flag;
        }

    });
    return walkObj;
}

const getsitting_1 = () => {
    var sittObj = {};
    $.each($("input[name='sitting1']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            sittObj[value] = flag;
        } else {
            sittObj[value] = flag;
        }

    });
    return sittObj;
}

const getstanding = () => {
    var standObj = {};
    $.each($("input[name='standing']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            standObj[value] = flag;
        } else {
            standObj[value] = flag;
        }

    });
    return standObj;
}

const getsleeping = () => {
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

const getsocialLife = () => {
    var socialObj = {};
    $.each($("input[name='socialLife']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            socialObj[value] = flag;
        } else {
            socialObj[value] = flag;
        }

    });
    return socialObj;
}

const gettravel = () => {
    var traObj = {};
    $.each($("input[name='travel']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            traObj[value] = flag;
        } else {
            traObj[value] = flag;
        }

    });
    return traObj;
}

const getchangingDegreeOfPain = () => {
    var chanObj = {};
    $.each($("input[name='changingDegreeOfPain']"), function() {
        var flag = 0;
        var value = $(this).val();
        if (this.checked) {
            flag = 1;
            chanObj[value] = flag;
        } else {
            chanObj[value] = flag;
        }

    });
    return chanObj;
}