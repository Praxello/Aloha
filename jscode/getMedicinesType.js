var medicine = new Map();

function getMedicineType() {
    $.ajax({
        url: url + 'get_Medicine_Type.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        medicine.set(response.Data[i].medicineTypeId, response.Data[i].type);
                    }
                }
            }
        }
    });
}                                                   
getMedicineType();