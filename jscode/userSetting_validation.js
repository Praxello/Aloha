$(function() {
    var jvalidate = $("#usersettingForm").validate({
        ignore: [],
        rules: {
     
            upassword :{
                required :true
            },
            conpassword :{
                equalTo: "#upassword",
                required:true
            }
          
        },
        messages: {
          
            upassword :{
                required : "Please Enter the Password"
            },
            conpassword :{
                required : "Please re-enter the Password"
            }
        }
    });
}

);