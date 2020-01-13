var loadFile = function(event) {
    var output = document.getElementById('userJpg');
    output.src = URL.createObjectURL(event.target.files[0]);
    document.getElementById('userPic').src = URL.createObjectURL(event.target.files[0]);
};