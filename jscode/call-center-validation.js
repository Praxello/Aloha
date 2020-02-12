$(function() {
        var jvalidate = $("#callForm").validate({
            ignore: [],
            rules: {
                firstName: {
                    required: true,
                    maxlength: 50,
                    lettersonly: true
                },
                middleName: {
                    lettersonly: true
                },
                lastName: {
                    required: true,
                    maxlength: 50,
                    lettersonly: true
                },
                birthdate: {
                    required: true
                },
                emailId: {
                    email: true
                },
                mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                landline: {
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                city: {
                    required: true,

                },
                state: {
                    required: true,

                },
                country: {
                    required: true,
                },
                pincode: {
                    number: true,
                    minlength: 6,
                    maxlength: 6
                },
                gender: {
                    required: true
                },
                follwupdate: {
                    required: "#folowupNeeded:checked"
                }
            },
            messages: {
                firstName: {
                    required: "Please enter Last name",
                    maxlength: "Length Exceed upto 50 characters",
                    lettersonly: "Enter only characters"
                },
                lastName: {
                    required: "Please enter Last name",
                    maxlength: "Length Exceed upto 50 characters",
                    lettersonly: "Enter only characters"
                },
                birthdate: {
                    required: "Please select/pick your birth date",
                },
                mobile: {
                    required: "Please enter mobile number",
                    number: "enter valid number",
                    minlength: "Should enter max 10 digits",
                    maxlength: "Mobile number cannot be exceed more then 10 digits"
                },
                landline: {
                    number: "enter valid number",
                    minlength: "Should enter max 10 digits",
                    maxlength: "Mobile number cannot be exceed more then 10 digits"
                },
                city: {
                    required: "Please select your City"

                },
                state: {
                    required: "Please select your state"

                },
                country: {
                    required: "Please select your Country"
                },
                pincode: {
                    number: "Kindly enter valid 6 digit pincode",
                    minlength: "Pincode cannot exide lessthan 6 digit",
                    maxlength: "Pincode cannot exide morethan 6 digit"
                },
                gender: {
                    required: "Kindly mention your Gender"
                },
                follwupdate: {
                    required: "Select Follow up date and time"
                }
            }
        });
    }

);