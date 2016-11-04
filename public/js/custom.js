
$(document).ready(function(){
    $(".dog-button").click(function(){
        $('#cat').toggle();
        $('#dog').toggle();

    });
});


$( function() {
    $( "#datepicker" ).datepicker();
} );