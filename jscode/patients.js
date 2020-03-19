var patients = new Map();
var patient_details = {};
var patientId_ap = null;
var global_patientId = null; //for lumbar neck,and back pain
var global_date = moment().format('YYYY-MM-DD');
var contactNo;
var getAllPatients = (branchId) => {
    $.ajax({
        url: url + 'getAllPatients.php',
        type: 'POST',
        dataType: 'json',
        data:{
            branchId:branchId
        },
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    patients.set(response.Data[i].patientId, response.Data[i]);
                }
                listPatients(patients);
            }
        }
    });
};
$('#searchContact').on('click', function(e) {
    e.preventDefault();
 contactNo = document.getElementById("mobileNo").value;
    console.log('dddddd'+contactNo);
});

var listPatients = patients => {
    $('#pTable').dataTable().fnDestroy();
    $('#patientData').empty();
    var tblData = '';
    for (let k of patients.keys()) {
        let patient = patients.get(k);

        tblData += '<tr><td><img src="upload/patients/' + patient.patientId + '.jpg" class="table-user-thumb" alt="Upload"></td>';
        tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
        tblData += '<td>' + getAge(patient.birthDate) + '</td>';
        //var mob=patient.mobile1;
        if (contactNo==patient.mobile1) {
            tblData += '<td>' +'<mark>'+ patient.mobile1+'</mark>'+ '</td>';
            console.log('Iamhere');
          } else {
            tblData += '<td>' + patient.mobile1 + '</td>';
            console.log('Iwowowowowo'+contactNo+'='+patient.mobile1);
}

        //tblData += '<td>' + patient.mobile1 + '</td>';
        tblData += '<td>' + patient.address + ' ' + patient.cityName + '</td>';
        tblData += '<td>' + getDate(patient.lastVisitDate) + '</td>';
        tblData += '<td>' + patient.nextVisitDate + '</td>';
        tblData += '<td><div class="table-actions" style="text-align: left;">';
        tblData += '<a href="#" onclick="editPatient(' + (k) + ')" title="Edit patients details"><i class="fas fa-user-injured" style="color:red"></i></a>';
        tblData += '<a href="#" class="list-delete" onclick="takeAppointment(' + (k) + ')" title="Take appointment"><i class="fas fa-book-medical" style="color:purple"></i></a>';
        tblData += '<a href="#"  onclick="opdPayment(' + (k) + ')" title="Opd Payment"><i class="fas fa-receipt" style="color:blue"></i></a>';
        tblData += '<a href="#"  onclick="acceptPayment(' + (k) + ')" title="Generate Payment"><i class="fas fa-rupee-sign" style="color:green"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#patientData').html(tblData);
    $('#pTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true,
        
    });
    
    oTable = $('#pTable').DataTable();

    $('#mobileNo').on('keyup change', function(){
      oTable.search($(this).val()).draw();
    })

};
getAllPatients(data.branchId);

var editPatient = (patientId) => {
    patientId = patientId.toString();
    patient_details = patients.get(patientId);
    global_patientId = patientId;
    $('#tData').hide();
    $('#editProfile').load('edit_patient_profile.php');
};

function takeAppointment(patientId) {
    patientId_ap = patientId;
    $('#appointment').modal('show');
}

function opdPayment(patientId) {
    patientId_ap = patientId;
    paymentDetails(patientId);
    $('#opd-payment').modal('show');
}

function acceptPayment(patientId) {
    patientId_ap = patientId;
    getPreviousPayments(patientId);
    loadTest();
    $('#paymentFor').html(list);
    $("#paymentFor").select2({
        placeholder: 'Select Doctor for payment',
        allowClear: true,
        dropdownParent: $('#opd-payment-generate')
    });
    //  $("#presTable tbody").empty();
    $('#opd-payment-generate').modal('show');
}

function goback() {
    $('#tData').show();
    $('#editProfile').empty();
}