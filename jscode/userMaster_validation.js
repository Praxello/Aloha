$(function() {
        var jvalidate = $("#userMasterForm").validate({
            ignore: [],
            rules: {
                username: {
                    required: true,
                    maxlength: 50
                },
                password :{
                    required :true
                },
                mobile :{
                    number : true
                },
                addharId:{
                    number :true
                },
                address : {
                    required :true
                }
            },
            messages: {
                username: {
                    required: "Please Enter User Name",
                    maxlength: "Length Exceed upto 50 characters"
                },
                password :{
                    required : "Please Enter the Password"
                },
                mobile:{
                    number : "Enter Valid Number"
                },
                addharId:{
                    number : "Enter Valid Number"
                },
                address :{
                    required : "Please Enter the Address"
                }
        

            }
        });
    }

);