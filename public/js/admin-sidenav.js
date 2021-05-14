$("#btn-sidenav").click(function(){
    let value = $(this).html();
    $(".side-nav").toggle(300);
});


$(document).ready(function(){
  $('.nav_btn').click(function(){
    $('.mobile_nav_items').toggleClass('active');
  });

});