var spines = new Map();
var spine_details = {};
// var patientId_ap = null;
const getLumbarSpine = () => {
    $.ajax({
        url: url + 'getAllLumbarSpine.php',
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            if (response.Responsecode == 200) {
                const count = response.Data.length;
                for (var i = 0; i < count; i++) {
                    spines.set(response.Data[i].lsAId, response.Data[i]);
                }
                listPatients(spines);
            }
        }
    });
};

const listPatients = spines => {
    $('#sTable').dataTable().fnDestroy();
    $('#spineData').empty();
    var tblData = '';
    for (let k of spines.keys()) {
        let spine = spines.get(k);

        tblData += '<tr><td>' + spine.lsAId + '</td>';
        // tblData += '<td>' + patient.firstName + ' ' + patient.surname + '</td>';
        tblData += '<td>' + spine.funDisabilityScore+ '</td>';
        tblData += '<td>' + spine.vasScore + '</td>';
        tblData += '<td>' + spine.presentSince + '</td>';
        tblData += '<td>' + spine.symptomsAtOnset + '</td>';
        tblData += '<td>' + spine.aggravatingFactor + '</td>';
        tblData += '<td>' + spine.relivingFactor + '</td>';
        tblData += '<td>' + spine.prevTreatments + '</td>';
        tblData += '<td>' + spine.recentsurgery + '</td>';
        tblData += '<td>' + spine.momentLoss + '</td>';
        tblData += '<td>' + spine.testMovement + '</td>';


        // tblData += '<td><div class="table-actions" style="text-align: left;">';
        // tblData += '<a href="#" onclick="editPatient(' + (k) + ')" title="Edit product details"><i class="ik ik-edit-2 text-blue"></i></a>';
        // tblData += '<a href="#" class="list-delete" onclick="takeAppointment(' + (k) + ')" title="Take appointment"><i class="ik ik-check-circle text-yellow"></i></a>';
        // tblData += '<a href="#"  onclick="opdPayment(' + (k) + ')" title="Opd Payment"><i class="ik ik-pocket text-green"></i></a>';
        // tblData += '<a href="#"  onclick="acceptPayment(' + (k) + ')" title="Generate Payment"><i class="ik ik-plus-square text-purple"></i></a>';
        tblData += '</div></td></tr>';
    }
    $('#spineData').html(tblData);
    $('#sTable').dataTable({
        searching: true,
        retrieve: true,
        bPaginate: $('tbody tr').length > 10,
        order: [],
        columnDefs: [{ orderable: false, targets: [0, 1, 2, 3, 4, 5, 6, 7] }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf'],
        destroy: true
    });
};
getLumbarSpine();

// const editPatient = (patientId) => {
//     patientId = patientId.toString();
//     patient_details = patients.get(patientId);
//     $('#tData').hide();
//     $('#editProfile').load('edit_patient_profile.php');
// };

// function takeAppointment(patientId) {
//     patientId_ap = patientId;
//     $('#appointment').modal('show');
// }

// function opdPayment(patientId) {
//     patientId_ap = patientId;
//     paymentDetails(patientId);
//     $('#opd-payment').modal('show');
// }

// function acceptPayment(patientId) {
//     patientId_ap = patientId;
//     getPreviousPayments(patientId);
//     loadTest();
//     $('#paymentFor').html(list);
//     $("#paymentFor").select2({
//         placeholder: 'Select Doctor for payment',
//         allowClear: true
//     });
//     $('#opd-payment-generate').modal('show');
// }