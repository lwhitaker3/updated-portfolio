<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Louise's Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/aos.css" />
        <link rel="stylesheet" href="/css/slick.css" />
        <link rel="stylesheet" href="/css/slick-theme.css" />

        <link rel="stylesheet" href="/css/main.css">

        <link rel="shortcut icon" type="image/x-icon" href="/favicon/favicon.ico">

        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>


    <body data-spy="scroll" data-target=".inner-navbar">



      <?php
      include '../templates/portfolio_menu.php';
      $next="index.php";
      $prev="radio.html";
      include '../templates/project_menu.php'; ?>



      <div class="container-fluid intro-portfolio-single-container">
        <div class="container container-wrapper">
          <div class="row row-wrapper flex flex_box">
            <div class="col-sm-6 col-wrapper flex-vertical-align portfolio-header">
              <div class="content-wrapper">
                <h1 data-aos="fade-down">SafetyFirst</h1>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-4 col-sm-offset-0">
                    <div class="lineBreak"></div>
                  </div>
                </div>
                <h4>Incident Reporting System for Nursing Home Employees</h4>
              </div>
            </div>
            <div class="col-sm-6 col-wrapper">
              <div class="image-wrapper">
                <img class="portfolio-single-intro-img" alt="radio home screen" src="/img/dashboard/v2wire.png">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid overview">
        <div class="container">
          <h6 class="center">SafetyFirst</h6>
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
              <h3>The Ask</h3>
              <p>Design and prototype an accident reporting system for nursing home settings. Provide user specific interface views: Report Submission and Analysis.</p>
              <h3>Project Description</h3>
              <p>This project was about finding a way to make it easier for administrators in nursing homes to keep track of incident reports. It is vital that these forms are easily accessible and kept track of because the must be reported to OSHA.</p>
              <p>The process of creating this system began with sketches, breaking down all the information that would be gathered on forms, and creating flows of the important tasks to be completed using the system. Breaking down the forms was important because many of the forms ask for the same information, so the labels needed to be standardized. It was also important to gather the types of information being gather in order to develop a useful dashboard.</p>
              <p>Once the planning process was completed, it was time to move into sitemaps and devloping the first round of wireframes. The first round of wireframes were completed to get an idea of what information needed to be on each page and to work through how a user would move through the system. The wireframes were created in Axure.</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class='list-wrapper'>
                <div class="row">
                  <h4 class="center upper">At a Glance</h4>
                  <div class="col-xs-6 col-sm-3 col-md-12">
                    <h5>Skills</h5>
                    <p class="list first">Responsive Design</p>
                    <p class="list">Prototyping</p>
                    <p class="list">Interaction Design</p>
                    <p class="list">Form Design</p>
                    <p class="list last">Dashboard Design</p>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-12">
                    <h5>Tools</h5>
                    <p class="list first">Axure</p>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-12">
                    <h5>Deliverables</h5>
                    <p class="list first">Task Flows</p>
                    <p class="list">Site Map</p>
                    <p class="list">Annotated Wireframes</p>
                    <p class="list last">Prototype</p>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-12">
                    <h5>Date</h5>
                    <p class="list first">Oct 2016 - Dec 2016</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid space product-showcase color-panel">
        <div class="container">
          <h6 class="white">RADIO UI</h6>
          <div class="row">

            <h2 class="center white">The Dashboard</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> The SafetyFirst is a system designed to make it easier for nursing home employees to report accidents and incidents as required by OSHA (Occupational Safety and Health Administration) for regulated industries. Safety is a major concern in the workplace and this system will provide a single place for all of the data to be analyzed and viewed.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 visible-lg visible-md visible-sm">
              <img class="product" alt="placeholder" src="/img/dashboard/v2wire.png">

            </div>
            <div class="col-sm-6">
              <h4>Responsive Design</h4>
              <p>SafetyFirst is a responsive web application, so it can be accessed on any device with internet access. There are two separate views: one for employees (Certified Nurse Aides, Certified Medical Aides, and Licensed Vocational Nurses) and one for the administration (Assistant Director of Nursing, Director of Nursing, and Business Administrators and Managers).</p>
              <h4 class="margin-top">Admin and Employees Views</h4>
              <p>The employee view is designed to be a simple reporting portal. The admin view is more complicated as they need to have access to many more functions. They will have all the functions from the reporting portal. Upon logging in they will have access to a dashboard that highlights reporting data.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid space process">
        <div class="container">
          <h6 class="center">RADIO UI</h6>
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
              <p class="intro"></p>
            </div>

          </div>

          <div class="row process-row-wrapper">

            <div class="col-md-1 hidden-xs hidden-sm inner-navbar-wrapper">
              <nav class="inner-navbar">
                <ul class="inner-menu nav">
                  <li class="inner-menu-item"><a href="#step1">1</a><span class='text'>Planning</span></li>
                  <li class="inner-menu-item"><a href="#step2">2</a><span class='text'>Sketching</span></li>
                  <li class="inner-menu-item"><a href="#step3">3</a><span class='text'>Wireframes</span></li>
                  <li class="inner-menu-item"><a href="#step4">4</a><span class='text'>Prototype</span></li>
                </ul>
              </nav>
            </div>

            <div class="process-wrapper">

              <div id="step1" class="step col-md-11 col-md-offset-1">
                <p class="headerline">1. Planning</p>
                <h4 class="color">Creating the Design Docs</h4>
                <div class="row">
                  <div class="col-xs-2">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                  <p>This project was about creating a system that allowed users to keep track of incidents reported by employees in a nursing home facility. The system had many forms that needed to be analyzed because many of the forms contained the same information. The labels for the form elements needed to be stanardzed across all forms and it was important to determine what type of input would be most effective for users.</p>
                  </div>
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="Excel Spreadsheet" src="/img/dashboard/excel.png">
                  </div>
                  <div class="col-sm-12">
                  <p>There were also a lot of steps that needed to be well thought out in order to make the system run smoothly. An employee creates a report, which generates a case number and that case needs to be reviwed by the admin. This is a task flow for admin appending a review to a case.</p>
                  </div>
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="User Flow" src="/img/dashboard/dashboard_flow.png">
                  </div>
                  <div class="col-sm-12">
                  <p>The site map shows the hierarchy of pages in the reporting dashboard.</p>
                  </div>
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="Sitemap" src="/img/dashboard/sitemap.png">
                  </div>
                </div>
              </div>

              <div id="step2" class="step col-md-11 col-md-offset-1">
                <p class="headerline">2. Sketching</p>
                <h4 class="color">Initial Ideas</h4>
                <div class="row">
                  <div class="col-xs-2">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                    <p>These are some of the very early sketches that were completed.</p>
                  </div>
                  <div class="col-sm-7">
                    PICTURE HERE
                  </div>
                </div>
              </div>

              <div id="step3" class="step col-md-11 col-md-offset-1">
                <p class="headerline">3. Wireframes</p>
                <h4 class="color">Designing the App</h4>
                <div class="row">
                  <div class="col-xs-2">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-7">
                    <p>The first version of the wireframes were developed to better understand what features were needed on each of the pages. They were very rough, but helped solidify the navigation structure and the form design.</p>
                  </div>
                  <div class="col-sm-5">
                    PICTURE HERE
                  </div>
                  <div class="col-sm-7">
                    <p>The second version of the wireframes were created to showcase the design of the system.</p>
                  </div>
                  <div class="col-sm-5">
                    <img class="portfolio_picture" alt="Version 2 of Wireframes" src="/img/dashboard/v2wire.png">
                  </div>
                </div>
              </div>

              <div id="step4" class="step col-md-11 col-md-offset-1">
                <p class="headerline">4. Prototyping</p>
                <h4 class="color">Designing Interactions</h4>
                <div class="row">
                  <div class="col-xs-2">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-7">
                    <p>A prototype was created using axure to demonstrate the interactions across the pages.</p>
                  </div>
                  <div class="col-sm-5">
                    <a href="http://b69tdb.axshare.com"><button type="button" class="btn btn-default">Prototype</button></a>
                  </div>
                </div>
              </div>


            </div>
          </div>


        </div>
      </div>

      <?php
      include '../templates/project_menu.php'; ?>



      <?php include '../templates/footer.php'; ?>



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

        $('body').scrollspy({ target: '.inner-navbar', offset: 50})

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
              scrollTop: $(hash).offset().top-50
            }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });

          } // End if

        });

        $(document).ready(function() {
            var s = $(".inner-navbar-wrapper");
            var pos = s.position();
            var height = $(".process-row-wrapper").height() + $(".process-row-wrapper").offset().top;


            $(window).resize(function() {
              var height = $(".process-row-wrapper").height() + $(".process-row-wrapper").offset().top;
            });

            $(window).scroll(function() {
                var windowpos = $(window).scrollTop();
                if (windowpos >= pos.top) {
                    $(".inner-navbar").addClass("stick");
                    var bottomPos = $(".inner-navbar").height() + $(".inner-navbar").offset().top;
                    if (bottomPos >= height) {
                        $(".inner-navbar").removeClass("stick");
                    }
                } else {
                    $(".inner-navbar").removeClass("stick");
                }
            });
        });
      </script>
      <script>
        $('.carousel').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 550,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
      </script>




    </body>
</html>
