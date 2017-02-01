<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script src="/js/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="/js/parallax.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script>
  $(function(){
    $('#filter-section').mixItUp();
  });
</script>
<script src="/js/slick.min.js"></script>
<script src="/js/main.js"></script>
<script>

  $('body').scrollspy({ target: '.inner-navbar', offset: 100})

  // Add smooth scrolling on all links inside the navbar
  $(".inner-navbar a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top-99
      }, 800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });

    } // End if

  });

  (function() {
    $(document).ready(handlePageUpdate);
    $(window).resize(handlePageUpdate);
    $(window).scroll(handlePageUpdate);

    function handlePageUpdate() {
      var windowpos = $(window).scrollTop();
      if (windowpos >= $(".inner-navbar-wrapper").offset().top) {
          $(".inner-navbar").addClass("stick");
          $(".inner-navbar").removeClass("bottom");

          // Absolute bottom of content area.
          var bottomPos = $(".process-row-wrapper").height() + $(".process-row-wrapper").offset().top;
          // Viewport to bottom of navbar.
          // 100px offset from top of navbar to top of viewport.
          var navbarBottom = $(".inner-navbar").height() + 100;
          if (windowpos + navbarBottom >= bottomPos) {
              $(".inner-navbar").removeClass("stick");
              $(".inner-navbar").addClass("bottom");
          }
      } else {
          $(".inner-navbar").removeClass("stick");
          $(".inner-navbar").removeClass("bottom");
      }
    }
  })();

</script>
