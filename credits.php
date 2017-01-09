<!DOCTYPE html>
<html>
    <head>

        <title>Louise's Portfolio</title>

        <?php include 'templates/head.php'; ?>

    </head>
    <body>


      <?php include 'templates/menu.php'; ?>

      <div class="container-fluid intro-credit-container">
        <div class="container">
          <img class="header_picture fadeIn" alt="phone" src="img/intro_image/phone.png">
          <h1 class="fadeInDown">Credits</h1>
        </div>
      </div>


      <div class="container-fluid space">
        <div class="container">
          <div class="row credits">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-1 col-md-10 col-sm-12">

              <h2>JavaScript Libraries</h2>
              <ul>
                <li><a href="http://pixelcog.github.io/parallax.js/" target="_blank">Parallax</a></li>
                <li><a href="https://michalsnik.github.io/aos/" target="_blank">Animate on Scroll (AOS)</a></li>
                <li><a href="http://kenwheeler.github.io/slick/" target="_blank">Slick Carousel</a></li>
                <li><a href="https://www.kunkalabs.com/mixitup/" target="_blank">Mix it Up</a></li>
              </ul>

              <h2>Code</h2>
              <ul>
                <li><a href="https://codepen.io/ferry/pen/ZYVwxz" target="_blank">Responsive Accordion</a></li>
                <li><a href="https://codepen.io/designcouch/pen/Atyop" target="_blank">Menu "Hamburger" Icon Animations</a></li>
                <li><a href="http://www.w3schools.com/howto/howto_js_fullscreen_overlay.asp" target="_blank">Full Screen Menu Overlay</a></li>
              </ul>

              <h2>Device Mockups</h2>
              <ul>
                <li><a href="https://www.behance.net/gallery/13493563/FREE-Flat-Apple-Devices-Mockup-iPhone-6-update" target="_blank">Flat Apple Device Mockups By Michał Jakobsze</a></li>
                <li><a href="http://creativecrunk.com/samsung-galaxy-s6-flat-psd-mockup/" target="_blank">Samsung Galaxy s6 Flat PSD Mockup</a></li>
              </ul>

              <h2>Frameworks</h2>
              <ul>
                <li><a href="https://v4-alpha.getbootstrap.com/" target="_blank">Bootstrap</a></li>
              </ul>


            </div>
          </div>
        </div>
      </div>




      <?php include 'templates/footer.php'; ?>



      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="js/parallax.min.js"></script>

      <script src="js/aos.js"></script>


      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <script>

        $(function(){
        	$('#filter-section').mixItUp();
        });
        $('#filter-section').on('mixEnd', function(){
          jQuery(window).trigger('resize').trigger('scroll');
        });


      </script>
      <script src="js/main.js"></script>




    </body>
</html>
