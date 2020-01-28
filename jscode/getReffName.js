var refName = new Map();

function getReffName() {
    $.ajax({
        url: url + 'getReferredBy.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {

            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {

                        refName.set(response.Data[i].refferId, response.Data[i]);
                    }
                }

                loadReffName(refName);
            }
        }
    });
}

function loadReffName(refName) {
    dropDownList += "<option></option>";
    var dropDownList = '';
    for (let k of refName.keys()) {
        var data = refName.get(k);
        dropDownList += "<option value=" + k + ">" + data.doctorName + " " + data.address + "</option>";
    }

    $('#referredby').html(dropDownList);
    $('#referredby').select2({
        placeholder: 'select refferance',
        allowClear: true
    });
}

getReffName();