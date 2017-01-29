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


            <!-- <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/card_sort.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Card Sort</h2>
                      <p>Reorganizing the Interactive Media Website</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->

            <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/ccs.png">
                <a href="/portfolio/ccs.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Department of Computational Science</h2>
                      <p>Designing microsites</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <!-- <div class="mix other code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/corals.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Coral Bleaching</h2>
                      <p>Explore the threats to Corals</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->


            <!-- <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/docs.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>DOCS</h2>
                      <p>Usabilty Testing</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->


            <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/coke.png">
                <a href="/portfolio/ethnography.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Ethnography</h2>
                      <p>Understanding how people use the Coke Freestyle machine</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>


            <!-- <div class="mix uxr">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/fpers.php">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/good_lemon.png">
                <a href="/portfolio/good_lemon.php">
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


            <div class="mix code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/infant.png">
                <a href="/portfolio/infant_mortality.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Infant Mortality in the US</h2>
                      <p>An interactive visualization on Infant Mortality in the US</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/perfectdate.png">
                <a href="/portfolio/perfect_date.php">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/princessrun.png">
                <a href="/portfolio/princess_run.php">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/radio_ui.png">
                <a href="/portfolio/Radio_UI.php">
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
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/dashboard.png">
                <a href="/portfolio/safety_first.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Safety First</h2>
                      <p>Incident reporting system for nursing home employees</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/sapeint.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Sapient</h2>
                      <p>Summer 2016 Internship</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/so.png">
                <a href="/portfolio/sports_unified.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Sports Unified</h2>
                      <p>Helping coaches and players organize events</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- <div class="mix uxd code">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/systematize.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Systematize</h2>
                      <p>PHP app for organizing your time</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->

            <!-- <div class="mix uxr uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/placeholder.png">
                <a href="/portfolio/ticket_app.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Ticket App</h2>
                      <p>Buy tickets for a theme park quickly and efficiently</p>
                    </div>
                  </div>
                </a>
              </div>
            </div> -->

            <div class="mix uxd">
              <div class="portfolio-item-wrapper">
                <img class="portfolio-item" alt="placeholder" src="img/thumbs/washing.png">
                <a href="/portfolio/washing_machine_UI.php">
                  <div class="portfolio-overlay">
                    <img class="magnifying-glass" alt="magnifying glass" src="img/icons/magnify.png">
                    <div class="portfolio-item-caption">
                      <h2>Optimal Wash</h2>
                      <p>A clearer way to use a washing machine</p>
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
