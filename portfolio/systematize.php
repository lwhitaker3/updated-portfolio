<!DOCTYPE html>
<html>
    <head>

        <title>Portfolio | Systematize</title>

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
            <div class="col-sm-6 col-wrapper flex-vertical-align portfolio-header">
              <div class="content-wrapper">
                <h1 data-aos="fade-down">Systematize</h1>
                <div class="row">
                  <div class="col-xs-4 col-xs-offset-4 col-sm-offset-0">
                    <div class="lineBreak"></div>
                  </div>
                </div>
                <h4>To do web application built with PHP</h4>
              </div>
            </div>
            <div class="col-sm-6 col-wrapper">
              <div class="image-wrapper">
                <img class="portfolio-single-intro-img" alt="radio home screen" src="/img/systematize/intro.png">
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid overview">
        <div class="container">
          <h6 class="center">Systematize</h6>
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
              <p>Create a data driven website</p>
              <h3>Project Description</h3>
              <p>Systematize is a web application built with Laravel. It was designed to be a new way to keep track of your to-do lists and plan out your week. The user can create basic to do lists with notes and due dates. On the calendar page, the user can drag individual items on the todo list to days on the calendar and plan out how they want to get everything done. They can write notes directly on the calendar as well.</p>
              <p>This project came from my frustration with todo list apps out there. I have yet to find a to-do list app that I like because they are either too complicated or too simple. When I have a lot of tasks to do I like to break them down into what tasks I am going to get done on each day.</p>
              <a target="_blank" href="http://ec2-54-245-149-157.us-west-2.compute.amazonaws.com/planner">
                <button type="button" class="btn btn-default margin-top">Try it Out</button>
              </a>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <div class='list-wrapper'>
                <div class="row">
                  <h4 class="center upper">At a Glance</h4>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Skills</h5>
                    <p class="list first">Interaction Design</p>
                    <p class="list">Front-End Design</p>
                    <p class="list last">Database Design</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Tools</h5>
                    <p class="list first">PHP (Laravel Framework)</p>
                    <p class="list">HTML/CSS</p>
                    <p class="list last">Adobe XD</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Deliverables</h5>
                    <p class="list first last">Working Prototype</p>
                  </div>
                  <div class="hidden-xs col-sm-3 col-md-12">
                    <h5>Date</h5>
                    <p class="list first">March 2016-May 2016</p>
                  </div>
                  <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-xs-6">
                      <h5>Skills</h5>
                      <p class="list first">Interaction Design</p>
                      <p class="list">Front-End Design</p>
                      <p class="list last">Database Design</p>
                    </div>
                    <div class="col-xs-6">
                      <h5>Tools</h5>
                      <p class="list first">PHP (Laravel Framework)</p>
                      <p class="list">HTML/CSS</p>
                      <p class="list last">Adobe XD</p>
                    </div>
                  </div>
                  <div class="row hidden-sm hidden-md hidden-lg">
                    <div class="col-xs-6">
                      <h5>Deliverables</h5>
                      <p class="list first last">Working Prototype</p>
                    </div>
                    <div class="col-xs-6">
                      <h5>Date</h5>
                      <p class="list first">March 2016-May 2016</p>
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
          <h6 class="white">Systematize</h6>
          <div class="row">

            <h2 class="center white">The Interface</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> Systematize is a to-do list application that allows a user to plan out tasks and how they want to get them done</p>
            </div>
          </div>
          <div class="row">

            <div class="col-sm-8">
              <img class="product" alt="placeholder" src="/img/systematize/product.png">
            </div>
            <div class="col-sm-4">
              <h4>Create Todo Lists</h4>
              <p>Add items to the todo list. Each item can have a due date, notes, and reminders.</p>
              <h4 class="margin-top">Plan Out Your Week</h4>
              <p>Drag the items to different days of the week to schedule your week.</p>
              <h4 class="margin-top">Add Notes</h4>
              <p>Type notes directly on the calendar so you don't forget anything.</p>
            </div>
          </div>
        </div>
      </div>


      <div class="container-fluid space process">
        <div class="container">
          <h6 class="center">Systematize</h6>
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
                  <li class="inner-menu-item"><a href="#step2">2</a><span class='text'>1st Prototype</span></li>
                  <li class="inner-menu-item"><a href="#step3">3</a><span class='text'>2nd Prototype</span></li>
                  <li class="inner-menu-item"><a href="#step4">4</a><span class='text'>3rd Prototype</span></li>
                </ul>
              </nav>
            </div>

            <div class="process-wrapper">

              <div id="step1" class="step col-md-11 col-md-offset-1">
                <p class="headerline">1. Planning</p>
                <h4 class="color">Creating the Design Docs</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>I started by looking at other planner apps out there to see what features they had and how they worked.</p>
                  </div>
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/competitive1.jpg">
                  </div>
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/competitive2.jpg">
                  </div>
                  <div class="col-sm-4 margin-top">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/competitive3.jpg">
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-7">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/sketches.jpg">
                  </div>
                  <div class="col-sm-5">
                    <p>I started stetching to get my ideas on paper and thinking about what would work best. It was important to me that all of the features worked together. I wanted to make sure it was relatively simple to use and didn't have an overload of functions that would make it confusing. The problem I found with many apps was that they had too many features packed into one app and it was easy to get lost in it.</p>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-7">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/database.jpg">
                  </div>
                  <div class="col-sm-5">
                    <p>This was the database design for the app. I started planning out what variables and data I would need to get from the user and how I could use all of that information to create an app that was elegant and easy to use.</p>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-12">
                    <p>These were the task flows I developed to work through the tasks the user could perform using this app. The final tasks i decided to develop for the app were:</p>
                    <ul>
                      <li>Create to-do list items (Title, Due Date, Description, and Category)</li>
                      <li>Add reminders to to-list items (Title, Day)</li>
                      <li>Create sticky notes (Title, Note, and Category)</li>
                      <li>Create categories (Name and color)</li>
                      <li>Put to-do list items on calendar</li>
                      <li>Add notes to the calendar</li>
                    </ul>
                  </div>
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/tasks.jpg">
                  </div>

                </div>
              </div>

              <div id="step2" class="step col-md-11 col-md-offset-1">
                <p class="headerline">2. 1st Prototype</p>
                <h4 class="color">Solidifying the Plan in XD</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>I built a prototype in Adobe XD to demonstrate what I was trying to accomplish with the application. This prototype allowed me to think about what features I wanted the app to have and how they would all work together.</p>
                    <a target="_blank" href="http://adobe.ly/1RIRp2r">
                      <button type="button" class="btn btn-default  ">Try it Out</button>
                    </a>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/xd1.png">
                  </div>
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/xd2.png">
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/xd3.png">
                  </div>
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/xd4.png">
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-12">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/wires_notes.jpg">
                  </div>
                </div>
              </div>

              <div id="step3" class="step col-md-11 col-md-offset-1">
                <p class="headerline">3. 2nd Prototype</p>
                <h4 class="color">Testing the Draggable Interface</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>In HTML, CSS, and Javascript I created a prototype for the calendar page to get an idea of how the interactions would work. I was trying to get a feel for how easy it would be to drag the todo list items into the calendar.</p>
                    <a target="_blank" href="/projects/planner_test/">
                      <button type="button" class="btn btn-default  ">Try it Out</button>
                    </a>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/html.jpg">
                  </div>
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/html2.jpg">
                  </div>
                </div>
              </div>

              <div id="step4" class="step col-md-11 col-md-offset-1">
                <p class="headerline">3. 3rd Prototype</p>
                <h4 class="color">Putting It All Together</h4>
                <div class="row">
                  <div class="col-xs-2 col-md-1">
                    <div class="lineBreak project-steps"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>Using Laravel I built this application from scratch.</p>
                  </div>
                </div>
                <div class="row margin-top">
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/code.jpg">
                  </div>
                  <div class="col-sm-6">
                    <img class="portfolio_picture" alt="placeholder" src="/img/systematize/final.jpg">

                  </div>
                </div>
              </div>




            </div>
          </div>


        </div>
      </div>


      <div class="container-fluid space final-product">
        <div class="container">
          <h6 class="white">Systematize</h6>
          <div class="row">

            <h2 class="center white">THE FINAL PRODUCT</h2>
            <div class="row">
              <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
                <div class="lineBreak"></div>
              </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2">
              <p class="intro"> The final app has 3 views: the calendar page, the list view, and the sticky notes</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel">
                <div><img class="carousel_image" src="/img/systematize/screen0.jpg" alt="screen"><h4 class="center">Login Page</h4></div>
                <div><img class="carousel_image" src="/img/systematize/screen1.jpg" alt="screen"><h4 class="center">Calendar Page/Home Page</h4></div>
                <div><img class="carousel_image" src="/img/systematize/screen2.jpg" alt="screen"><h4 class="center">List View Page</h4></div>
                <div><img class="carousel_image" src="/img/systematize/screen3.jpg" alt="screen"><h4 class="center">Sticky Notes Page</h4></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid space take-away">
        <div class="container">
          <h6 class="center">Systematize</h6>
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
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Prototyping in HTML/CSS can be really helpful. I discovered a problem with my draggable interactions before I got into the back-end development so I was able to figure out how to solve it before I was too far into the project.</p>
              <p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> This project was the first time I had worked with PHP. I learned back-end development and database design while working on this project. </p>
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
      $('.intro-portfolio-single-container').parallax({imageSrc: '/img/backgrounds/pattern-06.png', speed: .4});

      $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,

      });
      </script>




    </body>
</html>
