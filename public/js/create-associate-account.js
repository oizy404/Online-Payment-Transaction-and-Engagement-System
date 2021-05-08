$(document).ready(function(){
    $(".card-assoc").click(function(){
        $(".create-associate").fadeIn(500);
    });
    $("#btn-cancel").click(function(){
        $(".create-associate").fadeOut(500);
    });
})