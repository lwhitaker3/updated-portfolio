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
          <img class="header_picture fadeIn" alt="graduation cap" src="img/intro_image/cap.png">
          <h1 class="fadeInDown">Capstone Project</h1>
        </div>
      </div>

      <!-- <div class="container-fluid">
        <div class="container">
          <h6 class="center">Project Overview</h6>
          <div class="row">

            <h2 class="center">Magic Mirror</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>

            <div class="col-sm-12">
              <p>Here is where I will describe the project</p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="container-fluid margin-bottom">
        <div class="container">
          <h6 class="center">Documenting the Process</h6>
          <div class="row">

            <h2 class="center">My Journal</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>

            <div class="col-sm-12">
              <p class="center">Each week I will be documenting the progress of my project.</p>
            </div>



            <div class="col-sm-12 margin-top">
              <p class="headerline">Week 1 (1/17-1/24)</p>
              <h4 class="color">Project Concept</h4>
              <div class="row">
                <div class="col-xs-2">
                  <div class="lineBreak project-steps"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-7">
                  TEXT HERE
                </div>
                <div class="col-sm-5">
                  PICTURE HERE
                </div>
              </div>
            </div>

            <div class="col-sm-12 margin-top">
              <p class="headerline">Week 2 (1/25-1/31)</p>
              <h4 class="color">Working On Project</h4>
              <div class="row">
                <div class="col-xs-2">
                  <div class="lineBreak project-steps"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-7">
                  TEXT HERE
                </div>
                <div class="col-sm-5">
                  PICTURE HERE
                </div>
              </div>
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
