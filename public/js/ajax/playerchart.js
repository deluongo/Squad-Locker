// We don't want the form to actually submit if the user hits the Enter key
$('form').submit(function(event) {
    event.preventDefault();
});

function submitOnClick(formName){
    document.forms[formName].submit();
}

// The following anonymous function will trigger every time the key goes up
// in the search input; i.e. someone changes the search input.
$('#acceptSubmit').click(function() {

    // Set up the ajax call; see http://api.jquery.com/jquery.ajax for more details
    $.ajax({
        url: '/player', // Route that will handle the request; its job is to return us books.
        method: 'POST',
        dataType : 'html', // Kind of data we're expecting to get back
        data: { // Two pieces of data we'll send with the request
            '_token': $('input[name=_token]').val(),
            'acceptInvite': $('#acceptInvite').val(),
            'inviTeam': $('#inviTeam').val()
        },
        // What to do before each ajax
        beforeSend: function() {
            $('#loading').show();
            $('#results').hide();
            $('#testdiv').removeClass('error');
        },
        // What to do upon completion of a successful ajax call
        success: function(data) {
            $('#loading').hide();
            $('#results').show();
            $('#testdiv').html(data);
        },
        // What to do upon completion of an unsuccessful ajax call
        error: function() {
            $('#testdiv').html('Sorry, there was an error; your request could not be completed.');
            $('#testdiv').addClass('error');
        }

    });

});
