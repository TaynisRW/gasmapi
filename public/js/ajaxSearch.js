$(document).ready(function () {
    $('#state').click(function (e) {
        e.preventDefault();
        var state = $('#state').val();
        $.post("https://gasmapi.test/api/searchState", {state:state},
            function (match) {
                $('#municipality').html(match);
            }
        );
    });
});
