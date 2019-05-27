$(document).ready(function(){
    alert("JS is loaded");
    $('#submit').click(function(){
        if ($('#imagefile').files[0].size == 0) {
            $('#warning').text("Please Upload a file");
            return false;
        }
    });
});