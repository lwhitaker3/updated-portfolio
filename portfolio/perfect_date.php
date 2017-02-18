<!DOCTYPE html>
<html>
    <head>

        <title>Portfolio | Perfect Date</title>

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
                <h1 data-aos="fade-down">Perfect Date</h1>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-4 col-md-offset-0">
                    <div class="lineBreak"></div>
                  </div>
                </div>
                <h4>Plan your perfect date based on the weather</h4>
              </div>
            </div>
            <div class="col-md-6 col-wrapper">
              <div class="image-wrapper">
                <img class="portfolio-single-intro-img" alt="Perfect Date Screens" src="/img/perfectdate/intro.png">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid overview">
        <div class="container">
          <h6 class="center">Perfect Date</h6>
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
              <p>The task was to create a weather application in a creative and fun way. Using Foundation to create the interface, the goal was to make a fully responsive project that was connected to the OpenWeatherMap.org API.</p>
              <h3>Project Description</h3>
              <p>I wanted to create something that was more than just plain weather application that spits out the weather for a given city.</p>
              <p>Generally, the only times I check the weather are I want to plan some kind of activity (although that might also be because I live in Miami and the weather is more or less the same every day). Specifically, I thought about how it can be hard to think of activities to do on a date, and what you decide to do can be very weather dependent, so there was the idea for my app.</p>
              <p>The project interface was developed using HTML/CSS and Foundation. Javascript was used to make the page dynamic and the OpenWeatherMap.org API was used to pull in the weather data.</p>
              <a target="_blank" href="http://louisewhitaker.com/projects/perfectdate/">
                <button type="button" class="btn btn-default  ">Open Project in New Tab</button>
              </a>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class='list-wrapper'>
                <div class="row">
                  <h4 class="center upper">At a Glance</h4>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Skills</h5>
                    <p class="list first">Front End Development</p>
                    <p class="list last">Responsive Design</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Tools</h5>
                    <p class="list first">Illustrator</p>
                    <p class="list">JavaScript</p>
                    <p class="list">HTML/CSS</p>
                    <p class="list last">Foundation</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Deliverables</h5>
                    <p class="list first last">A weather app</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Date</h5>
                    <p class="list first">Oct 2015</p>
                  </div>
                  <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-xs-6">
                      <h5>Skills</h5>
                      <p class="list first">Front End Development</p>
                      <p class="list last">Responsive Design</p>
                    </div>
                    <div class="col-xs-6">
                      <h5>Tools</h5>
                      <p class="list first">Illustrator</p>
                      <p class="list">JavaScript</p>
                      <p class="list">HTML/CSS</p>
                      <p class="list last">Foundation</p>
                    </div>
                  </div>
                  <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-xs-6">
                      <h5>Deliverables</h5>
                    <p class="list first last">A weather app</p>
                    </div>
                    <div class="col-xs-6">
                      <h5>Date</h5>
                      <p class="list first">Oct 2015</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid space product-showcase color-panel">
        <div class="container">
          <h6 class="white">Perfect Date</h6>
          <div class="row">

            <h2 class="center white">The Interface</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro">The app was designed with HTML/CSS/Javascript</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 right right-column">
              <h4>Fully Responsive</h4>
              <p>The design works on desktop, tablet, and mobile</p>
              <h4 class="margin-top">Find a Date Based on A Category</h4>
              <p>The user can not only input a city and a day, but they can also narrow down the ideas by category to get more specific ideas.</p>
            </div>
            <div class="col-sm-4 visible-lg visible-md visible-sm">
              <img class="product" alt="Home Screen" src="/img/perfectdate/product.png">
            </div>
            <div class="col-sm-4">
              <h4>Enter Any City</h4>
              <p>The app is connected to the Open Weather API so the user can enter any city in the world.</p>
              <h4 class="margin-top">Plan 5 Days Out</h4>
              <p>The user can select any day within 5 days of the current day. They can then compare the weather on any of those days once they get to the date idea screen.</p>
            </div>
            <div class="col-sm-4 visible-xs">
              <img class="product" alt="Hoe Screen" src="/img/perfectdate/product.png">
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid space process">
        <div class="container">
          <h6 class="center">Perfect Date</h6>
          <div class="row">

            <h2 class="center">THE PROCESS</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak color"></div>
              </div>
            </div>
          </div>


          <div class="row process-row-wrapper">

            <div class="col-md-1 hidden-xs hidden-sm inner-navbar-wrapper">
              <nav class="inner-navbar">
                <ul class="inner-menu nav">
                  <li class="inner-menu-item"><a href="#step1">1</a><span class='text'>Planning</span></li>
                  <li class="inner-menu-item"><a href="#step2">2</a><span class='text'>Sketching</span></li>
                  <li class="inner-menu-item"><a href="#step3">3</a><span class='text'>Iterating</span></li>
                  <li class="inner-menu-item"><a href="#step4">4</a><span class='text'>Developing</span></li>
                </ul>
              </nav>
            </div>

            <div class="process-wrapper">

              <div id="step1" class="step col-md-11 col-md-offset-1">
                <p class="headerline">1. Ideating</p>
                <h4 class="color">Looking at Existing Apps</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>I started looking at what applications already existed around weather and date applications, to get an idea of what was out there. There are many apps out there that have date ideas. I did not find an application that allowed the user to see date ideas based on the weather in their location but I found applications that gave users date ideas.</p>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="Research - Competitive Investigation" src="/img/perfectdate/research.jpg">
                  </div>
                  <div class="col-sm-12 margin-top">
                    <p>These were some applications that I found for date planning. The first one is location based. The user can search for places and create a wishlist and share them with a partner. The second one was just a simple application that gave random date ideas and the user could select another one. I liked the simplicity of the concept in this application. It just gave an idea, and you could use that idea to come up with your own plan. The final one had a list of categories on the homepage and then showed a list of ideas based on the choice. This inspired me to add a category selection on the home page that allows the user to pick the type of date they want.</p>
                  </div>
                </div>
              </div>

              <div id="step2" class="step col-md-11 col-md-offset-1">
                <p class="headerline">2. Sketching</p>
                <h4 class="color">Planning the User Experience</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>I took a mobile-first approach to designing the application and sketched different ifras with various inputs.</p>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="Sketches" src="/img/perfectdate/sketch.jpg">
                  </div>
                </div>
              </div>

              <div id="step3" class="step col-md-11 col-md-offset-1">
                <p class="headerline">3. Iterating</p>
                <h4 class="color">Designing and Usability</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>The design for my interface underwent many changes. The color scheme changed drastically over time, but so did the look of the interface. The original designs were heavy with thick borders and color blocks. By the final design, the look was much cleaner. The heavy borders were removed and the use of colors was drastically reduced to create a cleaner look.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="Version 1" src="/img/perfectdate/perfectdate-04.png">
                    <p >The first color scheme was heavy, these colors dated the theme too much. The image was awkward and didn't pull the design together well.</p>
                  </div>
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="Version 2" src="/img/perfectdate/perfectdate-05.png">
                    <p >The colors were still too heavy in this version. The color blocks were distracting and the buttons took up way to much space.</p>
                  </div>
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="Version 3" src="/img/perfectdate/perfectdate-06.png">
                    <p >Using the dark pink as the accent color and the only splash of color on the page made the design much cleaner.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="Version 2 Home Screen" src="/img/perfectdate/perfectdate-14.jpg">
                  </div>
                  <div class="col-sm-4 margin-top hidden-xs">
                    <img class="portfolio_picture" alt="Version 2 Idea Screen" src="/img/perfectdate/perfectdate-15.jpg">
                  </div>
                  <div class="col-sm-4 margin-top hidden-xs">
                    <img class="portfolio_picture" alt="Version 2 Weather Screen" src="/img/perfectdate/perfectdate-16.jpg">
                  </div>
                  <div class="col-sm-12 margin-top">
                    <p >This was the second version of the application. User feedback I received was that the colors were very heavy and the background images were distracting. There was no information about the app on the home screen. The users did not want to press the information button to learn that this was an application that would give them a date idea based on the weather. The buttons at the bottom of the second screen were bulky and not conveniently placed on the screen.</p>
                  </div>

                </div>


              </div>

              <div id="step4" class="step col-md-11 col-md-offset-1">
                <p class="headerline">4. Developing</p>
                <h4 class="color">Coding the Application to make it Dynamic</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>The coding for this project involved a lot of small things. I had to populate the dropdown menu on the homepage with the next 5 days. And it had to include the day of the week. Making the app spit out date ideas involved creating a list of all the ideas I wanted the app to have and then creating sets for those ideas. I had to create a set of ideas for each weather type, category, and temperature. Then the ideas that were found in all three of those sets were the possible date ideas the user would see.</p>

                  </div>
                  <div class="col-sm-6 margin-top">
                    <img class="portfolio_picture" alt="Code in Atom" src="/img/perfectdate/perfectdate-17.jpg">
                  </div>
                  <div class="col-sm-6 margin-top hidden-xs">
                    <img class="portfolio_picture" alt="Code in Atom" src="/img/perfectdate/perfectdate-18.jpg">
                  </div>
                </div>
              </div>


            </div>
          </div>


        </div>
      </div>


      <div class="container-fluid space final-product">
        <div class="container">
          <h6 class="white">Perfect Date</h6>
          <div class="row">

            <h2 class="center white">THE FINAL PRODUCT</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro">The final design is fully responsive and the theme is cohesive across all of the pages. The final design only had 3 pages cutting down the hoops the user has to jump through to get an idea. On the first page, they give input on their preferences. On the next page, they can get an idea. If they don't like that idea they can simply click on the white area where the idea is displayed and the app with give them another idea.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel">
                <div><img class="carousel_image" src="/img/perfectdate/carousel-1.jpg" alt="Home Screen"><h4 class="center">Home Screen</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-3.jpg" alt="Date Selection - Seattle"><h4 class="center">Date Selection - Seattle</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-2.jpg" alt="Date Idea - Seattle"><h4 class="center">Date Idea - Seattle</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-4.jpg" alt="Date Idea - Seattle"><h4 class="center">Date Idea - Seattle</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-7.jpg" alt="Date Selection - Miami"><h4 class="center">Date Selection - Miami</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-5.jpg" alt="Date Idea - Miami"><h4 class="center">Date Idea - Miami</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-6.jpg" alt="Date Idea - Miami"><h4 class="center">Date Idea - Miami</h4></div>
                <div><img class="carousel_image" src="/img/perfectdate/carousel-8.jpg" alt="Home Screen"><h4 class="center">Home Screen</h4></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid space take-away">
        <div class="container">
          <h6 class="center">Perfect Date</h6>
          <div class="row">

            <h2 class="center">LESSONS LEARNED</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> I learned how to successfully pull data from an API</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Simplicity in design is key, heavy borders make a design look heavy and dated</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Creating as few steps as possible for the user is important for creating an intuitive experience</p>
            </div>
          </div>
        </div>
      </div>





      <?php
      include '../templates/project_menu.php';
      include '../templates/footer.php';
      include '../templates/portfolio_js.php';

      ?>

      <script>
      $('.intro-portfolio-single-container').parallax({imageSrc: '/img/backgrounds/pattern-05.png', speed: .4});

      $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
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
