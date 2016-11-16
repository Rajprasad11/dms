$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
$(".menu-btn").click(function(){
$(".collapse").removeClass("in").slideUp(10000)
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});



