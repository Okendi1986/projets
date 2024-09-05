jQuery(document).ready(function($) {
  // Cible les liens qui commencent par #
  $(".scroll a, .navbar-brand, .gototop").click(function(event){   
      var target = $(this).attr("href"); // Récupère l'attribut href du lien

      // Si le lien est un lien d'ancrage (commence par #)
      if (target.startsWith("#")) {
          event.preventDefault();  // Empêche la redirection normale
          // Fait défiler la page jusqu'à l'élément ciblé
          $('html, body').animate({
              scrollTop: $(target).offset().top
          }, 600, 'swing');
      }

      // Gestion des classes actives (optionnel)
      $(".scroll li").removeClass('active');
      $(this).parents('li').toggleClass('active');
  });
});








var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });



