$(document).ready(function(){
    $("#mode-payment").click(function(){
        $(".payment").fadeIn(500);
    });
    $("#btn-paymentcancel").click(function(){
        $(".payment").fadeOut(500);
    });
});
$(document).ready(function(){
    $("#e-walletbtn").click(function(){
        $("#e-walletrow").fadeIn(500);
        $("#o-bankingrow").fadeOut(500);
    });
    $("#o-bankingbtn").click(function(){
        $("#o-bankingrow").fadeIn(500);
        $("#e-walletrow").fadeOut(500);
    });
});