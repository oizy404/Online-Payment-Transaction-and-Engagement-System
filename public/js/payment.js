$(document).ready(function(){
    $("#mode-payment").click(function(){
        $(".payment").fadeIn(500);
    });
    $("#btn-paymentcancel").click(function(){
        $(".payment").fadeOut(500);
    });
});