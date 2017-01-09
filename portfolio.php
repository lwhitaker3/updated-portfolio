<!DOCTYPE html>
<html>
    <head>

        <title>Louise's Portfolio</title>

        <?php include 'templates/head.php'; ?>

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

          <div data-aos="fade" data-aos-once="true" class="row text-center filter-buttons">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/good_lemon.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
        						<div class="portfolio-item-caption">
        							<h2>The Good Lemon</h2>
                      <p>Spreading goodness, 1 lemonade at a time</p>
        						</div>
                  </div>
                </a>
    					</div>
            </div>

            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/radio_ui.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Radio UI</h2>
                      <p>A touchscreen interface for police radios</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="portfolio-single.html">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
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
