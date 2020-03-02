$(function() {
    var jvalidate = $("#usersettingForm").validate({
        ignore: [],
        rules: {
     
            password :{
                required :true
            },
            conpassword :{
                equalTo: "#password",
                required:true
            }
          
        },
        messages: {
          
            password :{
                required : "Please Enter the Password"
            },
            conpassword :{
                required : "Please re-enter the Password"
            }
        }
    });
}

);