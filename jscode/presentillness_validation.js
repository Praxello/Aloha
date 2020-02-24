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
                maxlength: 100
           
            },
            history: {
               
                maxlength: 100
              
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
                lettersonly: true
            },
            umnreflex:{
                lettersonly: true
            },
            lmnreflex:{
                lettersonly: true
            },
            reflexes:{
                lettersonly: true
            },
            s1s2heard:{
                lettersonly: true
            },
            murmur:{
                lettersonly: true
            },
            oralMucosa:{
                lettersonly: true
            },
            scalp:{
                lettersonly: true
            },
       
            nodules:{
                lettersonly: true
            },
            eyes:{
                lettersonly: true
            },
            raynaud:{
                lettersonly: true
            },
            telangiectasia:{
                lettersonly: true
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
                lettersonly: "enter only characters"
            },
            umnreflex :{
                lettersonly: "enter only characters"
            },
            lmnreflex :{
                lettersonly: "enter only characters"
            },
            reflexes :{
                lettersonly: "enter only characters"
            },
            s1s2heard :{
                lettersonly: "enter only characters"
            },
            murmur :{
                lettersonly: "enter only characters"
            },
            oralMucosa :{
                lettersonly: "enter only characters"
            },

            scalp :{
                lettersonly: "enter only characters"
            },
            nodules :{
                lettersonly: "enter only characters"
            },
            eyes :{
                lettersonly: "enter only characters"
            },
            raynaud :{
                lettersonly: "enter only characters"
            },
            telangiectasia :{
                lettersonly: "enter only characters"
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