$(document).ready(function(){
    $('#btnVerificar').click(function(){
        $('#contenido').html('<b>Este texto se ha modificado</b>');
        $('body').css("background", "yellow");
    });
});