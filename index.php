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

      <div class="intro-container-wrapper">
        <div class="container-fluid intro-container">
          <div class="container text-center">
            <h1 data-aos="fade-down">LOUISE R WHITAKER</h1>
            <p id="rotator">I am a <span id="underline"><span id="change"></span></span></p>
          </div>
        </div>
      </div>


      <div class="about-container container-fluid text-center space">
        <div class="container">
          <h6 data-aos="fade-up" data-aos-offset="300" data-aos-once="true" data-aos-easing="ease-in-sine" data-aos-duration="600">About Me</h6>
          <div class="flex_box row about_row flex">
            <div class="col-sm-6" data-aos="fade-right" data-aos-offset="300" data-aos-once="true" data-aos-easing="ease-in-sine" data-aos-duration="600">
              <h1 class="color">HI THERE!</h1>
              <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                  <div class="lineBreak color"></div>
                </div>
              </div>
              <h3>Let me introduce myself...</h3>
            </div>


            <div class="col-sm-6 flex-vertical-align" data-aos="fade-left" data-aos-offset="300" data-aos-once="true" data-aos-easing="ease-in-sine" data-aos-duration="600">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <p class="larger">My name is Louise. I am a UX/UI Designer from Seattle. I am currently working towards my Master's in Interactive Media at the University of Miami. I discovered my passion for user design as an undergrad when I started learning about web development. I found I was most interested in what worked and what didn't from the users' perspective.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <button type="button" class="btn btn-default">More About Me</button>
          </div>
        </div>
      </div>


      <div class="resume-container container-fluid text-center space color-panel">
        <div class="container">
          <h6 data-aos="fade-down" class="white">Resume</h6>
          <h1>What I Do</h1>
          <div class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
              <p class="larger">The tech industry is fast-paced and ever-changing. There are so many innovative ideas out there but they aren't much use if people don't understand how to use the products. I love intuitive designs and believe technology should be easy for everyone to use.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img class="resumeIcons" alt="UX/UI Design" src="img/skills_icons-1.png">
              <h4>UX/UI Design</h4>
              <p>From wireframing to prototyping, I enjoy creating interactive experiences that make sense. I have experience using Sketch, InVision, Axure RP, Illustrator, Photoshop and inDesign.</p>
            </div>
            <div class="col-sm-4">
              <img class="resumeIcons" alt="UX Research" src="img/skills_icons-2.png">
              <h4>UX Research</h4>
              <p>Knowing how users think and what they expect is so important to creating products that work. I have conducted card sorts, interviews, ethnography studies, and usability tests.</p>
            </div>
            <div class="col-sm-4">
              <img class="resumeIcons" alt="Code" src="img/skills_icons-3.png">
              <h4>Code</h4>
              <p>I love building sites that are intuitive and easy to use or using coding as a tool to prototype. I can code with HTML, CSS/SCSS, Javascript, PHP, and Wordpress.</p>
            </div>
          </div>
          <div class="row">
            <button type="button" class="btn btn-reverse">See My Resume</button>
          </div>
        </div>
      </div>

      <div class="portfolio-container container-fluid text-center space">
        <div class="container">
          <h6 data-aos="fade-down">Portfolio</h6>
          <h1 class="color">My Recent Work</h1>
          <div class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak color"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-3 col-sm-6">
              <p class="larger">Check out my favorite projects. You can go to my portfolio to see even more!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="accordion">
                <ul>
                  <li>
                    <div>
                      <a href="about.html">
                        <div>
                          <h2 class="white">Lorem Ipsum</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <!-- <a href="about.html">CLICK</a> -->
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Lorem Ipsum</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Lorem Ipsum</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <button type="button" class="btn btn-default">See More Projects</button>
          </div>
        </div>
      </div>

      <?php include 'templates/footer.php'; ?>


      <script src="js/jquery-3.1.0.min.js"></script>
      <script src="js/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <script src="js/parallax.min.js"></script>
      <script src="js/textrotator.js"></script>
      <script src="js/main.js"></script>




    </body>
</html>
