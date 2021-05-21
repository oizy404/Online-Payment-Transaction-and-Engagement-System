$(document).ready(function(){
    $(".card-clientsinfo").click(function(){
        $(".clients-info").fadeIn(500);
    });
    $("#btn-clientscancel").click(function(){
        $(".clients-info").fadeOut(500);
    });
})