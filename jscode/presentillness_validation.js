$(function() {
    var msg={
                  number: "enter valid number" 
            };
    var jvalidate = $("#presentillnessform").validate({
        ignore: [],
        rules: {
            chiefcomplaints: {
                // required: true,
                // lettersonly: true,
                maxlength: 100,
                number:true
            },
            history: {
                //required: true,
                //lettersonly: true,
                maxlength: 100,
                number:true
            },

            bp: {
                //required: true,
                number :true               

            },
            chest:{
                number:true

            },
            addedSound:{
                number:true
            },

            wheezeRhonchi:{
                number:true
            },

            dyspoea:{
                number:true
            },
            conciousness:{
                number:true
            },
            umnreflex:{
                number:true
            },
            lmnreflex:{
                number:true
            },
            reflexes:{
                number:true
            },
            s1s2heard:{
                number:true
            },
            murmur:{
                number:true
            },
            oralMucosa:{
                number:true
            },
            scalp:{
                number:true
            },
       
            nodules:{
                number:true
            },
            eyes:{
                number:true
            },
            raynaud:{
                number:true
            },
            telangiectasia:{
                number:true
            },
            Waist:{
                number:true
            },
            pulse:{
                number:true
            },
            hip:{
                number:true
            },
            spo2:{
                number:true
            },
            hb1c:{
                number:true
            },
            temp:{
                number:true
            },
            fbs:{
                number:true
            },
            weight:{
                number:true
            },
            height:{
                number:true
            },

            photosensivity:{
                number:true
            },
            rash:{
                number:true
            },
            site:{
                number:true
            },
            type:{
                number:true
            },
            itching:{
                number:true
            }

        },
        messages: {
            
            chiefcomplaints: {
                required: "Please enter  Chief complaints",
                maxlength: "Length Exceed upto 100 characters"
            },
            history: {
                required: "Please enter history",
                maxlength: "Length Exceed upto 100 characters"
            },
            bp:  msg,
            chest :msg,
            addedSound :{
                number: "enter valid number"
            },
            wheezeRhonchi :{
                number: "enter valid number"
            },
            dyspoea :{
                number: "enter valid number"
            },
            conciousness :{
                number: "enter valid number"
            },
            umnreflex :{
                number: "enter valid number"
            },
            lmnreflex :{
                number: "enter valid number"
            },
            reflexes :{
                number: "enter valid number"
            },
            s1s2heard :{
                number: "enter valid number"
            },
            murmur :{
                number: "enter valid number"
            },
            oralMucosa :{
                number: "enter valid number"
            },

            scalp :{
                number: "enter valid number"
            },
            nodules :{
                number: "enter valid number"
            },
            eyes :{
                number: "enter valid number"
            },
            raynaud :{
                number: "enter valid number"
            },
            telangiectasia :{
                number: "enter valid number"
            },
            Waist :{
                number: "enter valid number"
            },
            pulse :{
                number: "enter valid number"
            },
            hip :{
                number: "enter valid number"
            },
            weight :{
                number: "enter valid number"
            },
            height :{
                number: "enter valid number"
            },
            photosensivity:{
                number: "enter valid number"
            },
            rash:{
                number: "enter valid number"
            },
            site:{
                 number: "enter valid number"
            },
            type:{
                number: "enter valid number"
            },
            itching:{
                number: "enter valid number"
            }
        }
    });
}

);