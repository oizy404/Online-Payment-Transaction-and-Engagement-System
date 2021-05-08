$(document).ready(function(){
    $(".card-clients").click(function(){
        $(".create-client").fadeIn(500);
    });
    $(".btn-cancel").click(function(){
        $(".create-client").fadeOut(500);
    });
})
