$(function() {
    $('span.project').text("[Project]");
    
    $('#project-input').keyup(function(event){
        $('span.project').text( $('#project-input').val() );
    });
    
    $( ".helper" ).hide();
    
    $('#btn-helpers').click(function(event){
        $( ".helper" ).toggle( "slow" );
    });
});