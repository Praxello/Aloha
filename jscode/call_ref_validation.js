$(function() {
    var jvalidate = $("#callrefferedByForm").validate({
        ignore: [],
        rules: {
            reference: {
                required: true 
            }
        },
        messages: {
            reference: {
                required: "Please Enter the reference name" 
            }
        }
    });
}

);