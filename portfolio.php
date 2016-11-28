<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Louise's Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/aos.css" />

        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>


      <?php include 'templates/menu.php'; ?>

      <div class="container-fluid intro-portfolio-container">
        <div class="container">
          <img class="header_picture" alt="notebook" src="img/intro_images-04.png">
          <h1 data-aos="fade-down">Portfolio</h1>
        </div>
      </div>


      <div class="container-fluid space">
        <div class="container">

          <div class="row text-center filter-buttons">
            <div class="col-sm-12">
              <button class="btn btn-default filter" data-filter=".uxd">UX Design</button>
              <button class="btn btn-default filter" data-filter=".uxr">UX Research</button>
              <button class="btn btn-default filter" data-filter=".code">Code</button>
              <button class="btn btn-default filter" data-filter=".other">Other</button>
              <button class="btn btn-default filter" data-filter="all">Show All</button>
            </div>
          </div>

          <div id="filter-section" class="row portfolio-item-row">

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
        						<div class="portfolio-item-caption">
        							<h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
        						</div>
                  </div>
                </a>
    					</div>
            </div>

            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix other">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/portfolio_placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>PERFECT DATE</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="gap"></div>
            <div class="gap"></div>



          </div>
        </div>
      </div>




      <?php include 'templates/footer.php'; ?>



      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="js/parallax.min.js"></script>

      <script src="js/aos.js"></script>
      <script>
        AOS.init();
      </script>

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
