$(document).ready(function(){
    $('tr').filter(':even').addClass('alt');
    $('td:contains(Henry)').addClass('highlight');
    $('td:contains(The)').addClass('highlight');
    $('td:contains(Henry)').next().addClass('highlight');
    $('td:contains(The)').nextAll().addClass('highlight');
});