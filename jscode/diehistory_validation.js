$(function() {
    var jvalidate = $("#diethistoryform").validate({
        ignore: [],
        rules: {
            fat: {
                number:true,
                required : true
            },
            mage: {
                number:true
            },
            vfat: {
                number :true              
            },
            chest:{
                number:true

            },
            waist:{
                number:true
            },

            hip:{
                number:true
            },

            rthigh:{
                number:true
            },
            lthigh:{
                number:true
            },

            whipratio:{
                number:true
            },
            fmember:{
                number:true
            },
            dm:{
                number:true
            },
            htn:{
                number:true
            },
            vveins:{
                number:true
            },
            imenses:{
                number:true
            },
            thyroiddisorder:{
                number:true
            },
       
            jpain:{
                number:true
            },
            constipation:{
                number:true
            },
            edema:{
                number:true
            },
            pcod:{
                number:true
            },
            backache:{
                number:true
            },
            acidity:{
                number:true
            },
            gases:{
                number:true
            },
            hdisease:{
                number:true
            },
            dislipidemia:{
                number:true
            },
            breathlessness:{
                number:true
            },
            bloating:{
                number:true
            },
            like:{
                number:true
            },
            dislike:{
                number:true
            },

            scraving:{
                number:true
            },
            outsideeat:{
                number:true
            },
            oconsumption:{
                number:true
            },
            teacoffee:{
                number:true
            }
            

        },
        messages: {
            fat: {
                number : "Enter Only Number",
                required : "required"
            },
            mage: {
                number: "Enter Only Number"
            },
            vfat: {
                number : "Enter Only Number"              
            },
            chest:{
                number: "Enter Only Number"

            },
            waist:{
                number:"Enter Valid Number"
            },

            hip:{
                number:"Enter Valid Number"
            },

            rthigh:{
                number:"Enter Valid Number"
            },
            lthigh:{
                number:"Enter Valid Number"
            },

            whipratio:{
                number:"Enter Valid Number"
            },
            fmember:{
                number:"Enter Valid Number"
            },
            dm:{
                number:"Enter Valid Number"
            },
            htn:{
                number:"Enter Valid Number"
            },
            vveins:{
                number:"Enter Valid Number"
            },
            imenses:{
                number:"Enter Valid Number"
            },
            thyroiddisorder:{
                number:"Enter Valid Number"
            },
       
            jpain:{
                number:"Enter Valid Number"
            },
            constipation:{
                number:"Enter Valid Number"
            },
            edema:{
                number:"Enter Valid Number"
            },
            pcod:{
                number:"Enter Valid Number"
            },
            backache:{
                number:"Enter Valid Number"
            },
            acidity:{
                number:"Enter Valid Number"
            },
            gases:{
                number:"Enter Valid Number"
            },
            hdisease:{
                number:"Enter Valid Number"
            },
            dislipidemia:{
                number:"Enter Valid Number"
            },
            breathlessness:{
                number:"Enter Valid Number"
            },
            bloating:{
                number:"Enter Valid Number"
            },
            like:{
                number:"Enter Valid Number"
            },
            dislike:{
                number:"Enter Valid Number"
            },

            scraving:{
                number:"Enter Valid Number"
            },
            outsideeat:{
                number:"Enter Valid Number"
            },
            oconsumption:{
                number:"Enter Valid Number"
            },
            teacoffee:{
                number:"Enter Valid Number"
            }
            
        }
    });
}

);