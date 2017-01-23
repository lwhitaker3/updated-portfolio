<!DOCTYPE html>
<html>
    <head>

        <title>Louise's Portfolio</title>

        <?php include 'templates/head.php'; ?>

        <style>
        .construction_message{
          font-size: 18px;
          text-align: center;
          margin: 30px 0 100px;

        }
        </style>

    </head>
    <body>


      <?php include 'templates/menu.php'; ?>

      <div class="container-fluid intro-portfolio-container">
        <div class="container">
          <img class="header_picture fadeIn" alt="notebook" src="img/intro_image/notebook.png">
          <h1 class="fadeInDown">Portfolio</h1>
        </div>
      </div>


      <div class="container-fluid space">
        <div class="container">

          <p class="construction_message">This page is under construction, check back later for projects.</p>


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
