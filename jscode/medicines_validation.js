$(function() {
        var jvalidate = $("#medicineMasterForm").validate({
            ignore: [],
            rules: {
                name: {
                    required: true 
                }
            },
            messages: {
                name: {
                    required: "Please Enter medicines Name" 
                }
            }
        });
    }

);