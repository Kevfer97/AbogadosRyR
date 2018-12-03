
 $(document).ready(function(){
          $('.navbar').addClass('blanco');
          $('.navbar').addClass('navbar-light');
         
          
          $(window).scroll(function(){

            if($(window).scrollTop()>300){
            	console.log("Hola");
              $('.navbar').addClass('negro');
               $('.navbar').addClass('navbar-dark');
              $('.navbar').removeClass('blanco');
              $('.navbar').removeClass('navbar-light');
               $('.logo').addClass('logo2');
               $('.numeros').addClass('numeros2');
             
            }else{
              $('.navbar').removeClass('negro');
              $('.navbar').removeClass('navbar-dark');
              $('.navbar').addClass('blanco');
               $('.navbar').addClass('navbar-light');
                $('.logo').removeClass('logo2');
                $('.numeros').removeClass('numeros2');
                
            }

          });

     });
 
$('.dropdown-submenu > a').on("click", function(e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
});

$('.dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
});


$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});

