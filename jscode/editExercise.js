var loadexeDetails = details => {
    $('#title1').val(details.title);
    $('#details1').val(details.details);

    // var src = "upload/patients/" + details.patientId + ".jpg";
    // $('#userJpg').attr("src", src);
    // $('#userPic').attr("src", src);
};
loadexeDetails(exercise_details);
