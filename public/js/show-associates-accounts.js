$(document).ready(function(){
    $(".card-associnfo").click(function(){
        $(".assoc-info").fadeIn(500);
    });
    $("#btn-assoccancel").click(function(){
        $(".assoc-info").fadeOut(500);
    });
})