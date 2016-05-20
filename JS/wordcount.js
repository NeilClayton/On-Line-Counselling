$(document).ready(function() {
    var text_max = 1000;
    $('#countleft').html(text_max + ' / 1000 characters remaining.');

    $('#message').keyup(function() {
        var text_length = $('#message').val().length;
        var text_remaining = text_max - text_length;

        $('#countleft').html(text_remaining + ' / 1000 characters remaining.');
    });
});