$(function() {
        var jvalidate = $("#branchMasterForm").validate({
            ignore: [],
            rules: {
                branchName: {
                    required: true,
                    maxlength: 50
                },
               
                mobile :{
                    number : true
                },
                branchAddress:{
                    required :true
                }
            },
            messages: {
                branchName: {
                    required: "Please Enter User Name",
                    maxlength: "Length Exceed upto 50 characters"
                },
              
                mobile:{
                    number : "Enter Valid Number"
                },
                branchAddress:{
                    required: "Please Enter Branch Address",
                }

            }
        });
    }

);