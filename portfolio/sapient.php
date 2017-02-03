<!DOCTYPE html>
<html>
    <head>

        <title>Portfolio | Sapient</title>

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
                <h1 data-aos="fade-down">Sapient</h1>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-4 col-md-offset-0">
                    <div class="lineBreak"></div>
                  </div>
                </div>
                <h4>Summer 2016 Internship</h4>
              </div>
            </div>
            <div class="col-md-6 col-wrapper">
              <div class="image-wrapper">
                <img class="portfolio-single-intro-img2" alt="radio home screen" src="/img/sapient/logo.png">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid overview">
        <div class="container">
          <h6 class="center">Internship</h6>
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
              <h3>The Internship</h3>
              <p>In the summer of 2016 I interned at the Coconut Grove office as an experience designer. I worked with the UX team on various accounts developing different types of products.</p>
              <h3>What I Did</h3>
              <p>In the summer of 2016 I worked at the Coconut Grove office as an experience design intern. I worked with the UX team on various accounts and had a chance to work on projects at all different stages of development. </p>
              <p>MORE CONTENT HERE </p>
              <p>Due to NDA restrictions I am unable to share the materials I worked on during my time with Sapient.</p>
              <p>IAlong with the other Interns, I worked on The Good Lemon Project for our intern project which we presented to the office on the last day of our internship. You can check out that project here.</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class='list-wrapper'>
                <div class="row">
                  <h4 class="center upper">At a Glance</h4>

                  <div class="col-xs-12 col-sm-4 col-md-12">
                    <h5>Clients</h5>
                    <p class="list first">Carrnival</p>
                    <p class="list">Universal</p>
                    <p class="list">Seminole Hardrock</p>
                    <p class="list last">Walmart</p>
                  </div>

                  <div class="col-xs-12 col-sm-4 col-md-12">
                    <h5>Skills</h5>
                    <p class="list first">Wireframing</p>
                    <p class="list">Prototyping</p>
                    <p class="list">Competetive Analyses</p>
                    <p class="list last">Heuristic Reviews</p>
                  </div>

                  <div class="col-xs-12 col-sm-4 col-md-12">
                    <h5>Date</h5>
                    <p class="list first">June - Aug 2016</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="container-fluid space take-away">
        <div class="container">
          <h6 class="center">Project Name</h6>
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
