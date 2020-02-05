$(function() {
        var jvalidate = $("#testMasterForm").validate({
            ignore: [],
            rules: {
                testName: {
                    required: true 
                }
            },
            messages: {
                testName: {
                    required: "Please Enter Test Name" 
                }
            }
        });
    }

);