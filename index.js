$(document).ready(function() {
    var text_max = 180;
    $('#bio_feedback').html(text_max + ' characters remaining');

    $('#bio').keyup(function() {
        var text_length = $('#bio').val().length;
        var text_remaining = text_max - text_length;

        $('#bio_feedback').html(text_remaining + ' characters remaining');
    });
});
