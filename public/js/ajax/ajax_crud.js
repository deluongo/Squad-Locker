$(document).ready(function() {
    $('#submit').on('submit', function (e) {
        e.preventDefault();
        var title = $('#title').val();
        var body = $('#body').val();
        var published_at = $('#published_at').val();
        $.ajax({
            type: "POST",
            url: host + '/articles/create',
            data: {title: title, body: body, published_at: published_at},
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg+"</div>");
            }
        });
    });
});
