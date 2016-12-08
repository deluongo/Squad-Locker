// We don't want the form to actually submit if the user hits the Enter key
$('form').submit(function(event) {
    event.preventDefault();
});

function submitOnClick(formName){
    document.forms[formName].submit();
}

// The following anonymous function will trigger every time the key goes up
// in the search input; i.e. someone changes the search input.
$('#submitButton').click(function() {

    // Set up the ajax call; see http://api.jquery.com/jquery.ajax for more details
    $.ajax({
        url: '/free-agency', // Route that will handle the request; its job is to return us books.
        method: 'POST',
        dataType : 'html', // Kind of data we're expecting to get back
        data: { // Two pieces of data we'll send with the request
            '_token': $('input[name=_token]').val(),
            'search_position': $('#search_position').val(),
            'search_name': $('#search_name').val(),
            'search_rep_status': $('#search_rep_status').val(),
            'search_rep_level': $('#search_rep_level').val(),
            'search_affiliation': $('#search_affiliation').val(),
            'search_archetype': $('#search_archetype').val(),
            'search_type': $('#search_type').val(),
            'search_style': $('#search_style').val()
        },
        // What to do before each ajax
        beforeSend: function() {
            $('#loading').show();
            $('#defaultResults').show();
            $('#results').removeClass('error');
        },
        // What to do upon completion of a successful ajax call
        success: function(data) {
            $('#loading').hide();
            $('#defaultResults').hide();
            $('#results').html(data);
        },
        // What to do upon completion of an unsuccessful ajax call
        error: function() {
            $('#results').html('Sorry, there was an error; your request could not be completed.');
            $('#results').addClass('error');
        }

    });
    <!--
    /*
    $('.addButton').click(function() {
        // Set up the ajax call; see http://api.jquery.com/jquery.ajax for more details
        $.ajax({
            url: '/free-agency', // Route that will handle the request; its job is to return us books.
            method: 'POST',
            dataType : 'html', // Kind of data we're expecting to get back
            data: { // Two pieces of data we'll send with the request
                '_token': $('input[name=_token]').val(),
                'search_position': $('#search_position').val(),
                'search_name': $('#search_name').val(),
                'search_rep_status': $('#search_rep_status').val(),
                'search_rep_level': $('#search_rep_level').val(),
                'search_affiliation': $('#search_affiliation').val(),
                'search_archetype': $('#search_archetype').val(),
                'search_type': $('#search_type').val(),
                'search_style': $('#search_style').val()
            },
            // What to do before each ajax
            beforeSend: function() {
                $('#loading').show();
                $('#defaultResults').show();
                $('#results').removeClass('error');
            },
            // What to do upon completion of a successful ajax call
            success: function(data) {
                $('#loading').hide();
                $('#defaultResults').hide();
                $('#results').html(data);
            },
            // What to do upon completion of an unsuccessful ajax call
            error: function() {
                $('#results').html('Sorry, there was an error; your request could not be completed.');
                $('#results').addClass('error');
            }

        });
        */
        //--!>
});
