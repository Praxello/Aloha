var instructions = new Set();

function getInstructions() {
    $.ajax({
        url: url + 'getInstructions.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            console.log(response);
            if (response.Responsecode == 200) {
                if (response.Data != null) {
                    var n = response.Data.length;
                    for (var i = 0; i < n; i++) {
                        instructions.add(response.Data[i].instruction);
                    }
                }

            }
        }
    });
}
getInstructions();