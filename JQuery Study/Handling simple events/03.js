$(document).ready(function() {
    $('#switcher-default').addClass('selected');
    
    $('#switcher-default').on('click',function(){
        $('body').removeClass('narrow');
        $('body').removeClass('large');
        $('#switcher button').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#switcher-narrow').on('click',function(){
        $('body').removeClass('large');
        $('body').addClass('narrow');
        $('#switcher button').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $('#switcher-large').addClass('selected').on('click', function(){
        $('body').addClass('large');
        $('body').removeClass('narrow');
        $('#switcher button').removeClass('selected');
        $(this).addClass('selected');
    });
});