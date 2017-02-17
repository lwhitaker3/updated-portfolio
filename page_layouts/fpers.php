<!DOCTYPE html>
<html>
    <head>

        <title>Portfolio | FPERS</title>

        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/slick-theme.css" />

        <?php include '../templates/head.php'; ?>

    </head>

    <body data-spy="scroll" data-target=".inner-navbar">



      <?php
      include_once '../templates/project_menu_variables.php';
      include '../templates/portfolio_menu.php';
      include '../templates/project_menu.php'; ?>



      <div class="container-fluid intro-portfolio-single-container">
        <div class="container container-wrapper">
          <div class="row row-wrapper flex flex_box">
            <div class="col-md-6 col-wrapper flex-vertical-align portfolio-header">
              <div class="content-wrapper">
                <h1 data-aos="fade-down">FPERS</h1>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-4 col-md-offset-0">
                    <div class="lineBreak"></div>
                  </div>
                </div>
                <h4>Firefighter Personal Exposure Reporting System</h4>
              </div>
            </div>
            <div class="col-md-6 col-wrapper">
              <div class="image-wrapper">
                <img class="portfolio-single-intro-img" alt="radio home screen" src="/img/phone_placeholder.png">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid overview">
        <div class="container">
          <h6 class="center">FPERS</h6>
          <div class="row">

            <h2 class="center">OVERVIEW</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-8">
              <h3>About</h3>
              <p>Since August 2016 I have been the lead UX research assistant working on an online exposure reporting system developed for firefighters. The project is part of a larger initiative designed to look at cancer trends in firefighters.</p>
              <h3>My Role</h3>
              <p>When we started this project the current method for reporting exposures was a pdf form. Our goal is to develop an online system that meets the needs of firefighters and is as easy to use as possible.</p>
              <p>My first assignment was to conduct a heuristic evaluation on the current form to find areas for improvement when we made this form digital. My overall assessment of the form was that it was difficult to read because the font was too small and there were too many fields crammed into a single page. This made it difficult for a user to fill out the form in the first place.</p>
              <p>I conducted a comparative analysis across other reporting systems to get and understanding of the forms that different departments across the country are using. By comparing each form against a selected list of criteria a score was assigned to each form to see how they all compared to each other. The section criteria included organization clarity, clear labeling, matching user expectations, effective visual design, form field usability, and readability.</p>
              <p>The next step was conducting card sorts and focus groups with firefighters to gain better insights into their expectations for a reporting system and their mental models. By talking to firefighters in the focus groups we learned what types of decontamination procedures they have, what they felt were the biggest risks on the job and what information they would expect to fill out on the forms. The card sorts allowed us to look at how firefighters grouped reporting variables so the digital form would be organized into categories that made the most sense to them.</p>
              <p>Once the wireframes were developed I conducted a heuristic evaluation on them identify opportunities for improvement and offer recommendations for the next irritation. And when the system was developed I conducted a heuristic evaluation on the system to identify the issues with the system so it was ready to user test.</p>
              <p>In the fall of 2016 we conducted a summative usability test on the system with 30 Firefighters from Palm Beach County. The sessions lasted approximately 90 minutes and we asked the firefighters to complete 8 tasks using the system on both mobile (android) and desktop (pc) platforms.</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class='list-wrapper'>
                <div class="row">
                  <h4 class="center upper">At a Glance</h4>
                  <div class="col-sm-6 col-md-12">
                    <h5>Skills</h5>
                    <p class="list first">Card Sorts</p>
                    <p class="list">Usabilty Testing</p>
                    <p class="list">Hueristic Evaluation</p>
                    <p class="list">Comparative Analysis</p>
                    <p class="list last">Focus Groups</p>
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <h5>Date</h5>
                    <p class="list first">Aug 2015 - Present</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="container-fluid space product-showcase color-panel">
        <div class="container">
          <h6 class="white">FPERS</h6>
          <div class="row">

            <h2 class="center white">The Interface</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> Here is the product. Here is the product. Here is the product. Here is the product.Here is the product. Here is the product.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 right right-column">
              <h4>Feature</h4>
              <p>Yay</p>
              <h4 class="margin-top">Feature</h4>
              <p>Yay</p>
            </div>
            <div class="col-sm-4 visible-lg visible-md visible-sm">
              <img class="product" alt="placeholder" src="/img/phone_placeholder.png">
            </div>
            <div class="col-sm-4">
              <h4>Feature</h4>
              <p>Yay</p>
              <h4 class="margin-top">Feature</h4>
              <p>Yay</p>
            </div>
            <div class="col-sm-4 visible-xs">
              <img class="product" alt="placeholder" src="/img/phone_placeholder.png">
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid space process">
        <div class="container">
          <h6 class="center">FPERS</h6>
          <div class="row">

            <h2 class="center">THE PROCESS</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak color"></div>
              </div>
            </div>
          </div>

          <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> Here is the product. Here is the product. Here is the product. Here is the product.Here is the product. Here is the product.</p>
            </div>

          </div>

          <div class="row process-row-wrapper">

            <div class="col-md-1 hidden-xs hidden-sm inner-navbar-wrapper">
              <nav class="inner-navbar">
                <ul class="inner-menu nav">
                  <li class="inner-menu-item"><a href="#step1">1</a><span class='text'>Requirements</span></li>
                  <li class="inner-menu-item"><a href="#step2">2</a><span class='text'>Planning</span></li>
                  <li class="inner-menu-item"><a href="#step3">3</a><span class='text'>Sketching</span></li>
                  <li class="inner-menu-item"><a href="#step4">4</a><span class='text'>Wireframes</span></li>
                  <li class="inner-menu-item"><a href="#step5">5</a><span class='text'>Prototype</span></li>
                </ul>
              </nav>
            </div>

            <div class="process-wrapper">

              <div id="step1" class="step col-md-11 col-md-offset-1">
                <p class="headerline">1. Requirements</p>
                <h4 class="color">UNDERSTANDING THE PRODUCT</h4>
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

              <div id="step2" class="step col-md-11 col-md-offset-1">
                <p class="headerline">2. Planning</p>
                <h4 class="color">Creating the Design Docs</h4>
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

              <div id="step3" class="step col-md-11 col-md-offset-1">
                <p class="headerline">3. Sketching</p>
                <h4 class="color">Initial Ideas</h4>
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

              <div id="step4" class="step col-md-11 col-md-offset-1">
                <p class="headerline">4. Wireframes</p>
                <h4 class="color">Designing the App</h4>
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

              <div id="step5" class="step col-md-11 col-md-offset-1">
                <p class="headerline">5. Prototyping</p>
                <h4 class="color">Designing Interactions</h4>
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
      </div>


      <div class="container-fluid space final-product">
        <div class="container">
          <h6 class="white">FPERS</h6>
          <div class="row">

            <h2 class="center white">THE FINAL PRODUCT</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> Here is the product. Here is the product. Here is the product. Here is the product.Here is the product. Here is the product.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel">
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">1</h4></div>
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">2</h4></div>
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">3</h4></div>
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">4</h4></div>
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">5</h4></div>
                <div><img class="carousel_image" src="/img/carousel_placeholder.png" alt="screen"><h4 class="center">6</h4></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid space take-away">
        <div class="container">
          <h6 class="center">FPERS</h6>
          <div class="row">

            <h2 class="center">LESSONS LEARNED</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> Here is the product. Here is the product. Here is the product. Here is the product.Here is the product. Here is the product.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
            </div>
            <div class="col-sm-5">
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lesson 1</p>
            </div>
          </div>
        </div>
      </div> -->





      <?php
      include '../templates/project_menu.php';
      include '../templates/footer.php';


      ?>

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/aos.js"></script>
      <script src="/js/parallax.min.js"></script>
      <script src="/js/main.js"></script>

      <script>
        AOS.init();
        $('.intro-portfolio-single-container').parallax({imageSrc: '/img/backgrounds/pattern-02.png', speed: .4});
      </script>





    </body>
</html>
