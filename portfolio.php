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


            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Card Sort" src="img/thumbs/cardsort.jpg">
                <a href="/portfolio/card_sort">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Card Sort</h2>
                      <p>Reorganizing Content on Interactive Media Site</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="CCS Website" src="img/thumbs/ccs.jpg">
                <a href="/portfolio/ccs">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>CCS</h2>
                      <p>Designing Microsites for the Department of Computational Science</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- MAYBE CHATBOT? -->
            <div class="mix other code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Coral Website" src="img/thumbs/coral.jpg">
                <a href="/portfolio/corals">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Coral Restoration Website</h2>
                      <p>Website for RSMAS about their coral restoration project</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="DOCS Redesign" src="img/thumbs/docs.jpg">
                <a href="/portfolio/docs">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>DOCS</h2>
                      <p>Heuristic Evaluation and Formative Usability Testing of DOCS site</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Coke Redesign" src="img/thumbs/coke.jpg">
                <a href="/portfolio/ethnography">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Coke Ethnography</h2>
                      <p>Understanding how people use the Coke Freestyle machine</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <!-- <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="FPERS" src="img/thumbs/fpers.png">
                <a href="/portfolio/fpers">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>FPERS</h2>
                      <p>Firefighter Personal Exposure Reporting System</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->

            <div class="mix uxd code other">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Good Lemon Website" src="img/thumbs/good_lemon.jpg">
                <a href="/portfolio/good_lemon">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>The Good Lemon</h2>
                      <p>2016 Sapient Intern Project</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="mix code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Infant Mortality Website" src="img/thumbs/infant.jpg">
                <a href="/portfolio/infant_mortality">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Infant Mortality</h2>
                      <p>A d3.js focusing on infant mortality in the US</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxr uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Ticket Application" src="img/thumbs/ticketapp.jpg">
                <a href="/portfolio/park_pass">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>ParkPass</h2>
                      <p>An app to simplify buying tickets to a theme park.</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Perfect Date" src="img/thumbs/perfectdate.jpg">
                <a href="/portfolio/perfect_date">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Perfect Date</h2>
                      <p>Plan your perfect date based on the weather</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix code uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Princess Run Game" src="img/thumbs/princessrun.jpg">
                <a href="/portfolio/princess_run">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Princess Run</h2>
                      <p>A 2-d endless runner game in p5.js</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Radio UI" src="img/thumbs/radio_ui.jpg">
                <a href="/portfolio/radio_ui">
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
                <img class="portfolio-item" alt="Dashboard" src="img/thumbs/dashboard.jpg">
                <a href="/portfolio/safety_first">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>SafetyFirst</h2>
                      <p>Incident reporting system for nursing home employees</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Sports Unified App" src="img/thumbs/so.jpg">
                <a href="/portfolio/sports_unified">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Sports Unified</h2>
                      <p>App to help players and coach keep track of events</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="Systematize Website" src="img/thumbs/systematize.jpg">
                <a href="/portfolio/systematize">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Systematize</h2>
                      <p>To do web application built with PHP</p>
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
