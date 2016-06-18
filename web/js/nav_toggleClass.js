$(document).ready(function(){
  $('.submenu').hover(function(){
    var foo = $(this).prev();
    $(foo).toggleClass('current');
  });
});