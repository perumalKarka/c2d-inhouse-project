$(document).ready(function(){
    $('.filter-bar').click(() => {
      $('.menu').toggleClass('nav-open');
      $('.hamburger').toggleClass('nav-open');
      $('body.catelogue-page').toggleClass('hamburger-nav-open');
    });
    
    $('.has-submenu>a').click(function() {
      if($(this).hasClass('active')){
        $('.active').removeClass('active');
      } else {
        $('.active').removeClass('active');
        $(this).toggleClass('active');
        $(this).siblings().toggleClass('active');
      }
    });
    
    
    
    $('.search-form').submit(e => {
      e.preventDefault();
    });

    
    
});