$(function() {
        var jvalidate = $("#paymentForm").validate({
            ignore: [],
            rules: {
                paymentFor: {
                    required: true,
                    maxlength: 50
                },
                surname: {
                    required: true,
                    maxlength: 50
                },

                birthDate: {
                    required: true

                },
                mobile1: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                address: {
                    required: true

                },

            },
            messages: {
                firstName: {
                    required: "Please enter first name",
                    maxlength: "Length Exceed upto 50 characters"
                },
                surname: {
                    required: "Please enter Last name",
                    maxlength: "Length Exceed upto 50 characters"
                },
                birthDate: {
                    required: "Please enter Date of birth"

                },
                mobile1: {
                    required: "Please enter mobile number",
                    number: "enter valid number",
                    minlength: "Should enter max 10 digits",
                    maxlength: "Mobile number cannot be exceed more then 10 digits"
                },
                address: {
                    required: "Please enter full address detail with landmark"

                },

            }
        });
    }

);