<!DOCTYPE html>
<html>
  <head>

      <title>Louise's Portfolio</title>

      <?php include 'templates/head.php'; ?>

  </head>
    <body>


      <?php include 'templates/menu.php'; ?>

      <div class="intro-container-wrapper">
        <div class="container-fluid intro-container">
          <div class="container text-center title-text">
            <h1 class="fadeInDown">LOUISE R WHITAKER</h1>
            <p class="fadeIn" id="rotator">I am a <span id="underline"><span id="change"></span></span></p>
          </div>
        </div>
      </div>


      <div class="about-container container-fluid text-center space">
        <div class="container">
          <h6 data-aos="fade-down" data-aos-once="true">About Me</h6>
          <div class="flex_box row about_row flex">
            <div data-aos="fade-right" data-aos-once="true" class="col-sm-6">
              <h1 class="color">HI THERE!</h1>
              <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                  <div class="lineBreak color"></div>
                </div>
              </div>
              <h3>Let me introduce myself...</h3>
            </div>


            <div data-aos="fade-left" data-aos-once="true" class="col-sm-6 flex-vertical-align">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <p class="larger">My name is Louise. I am a UX/UI Designer from Seattle. I am currently working towards my Master's in Interactive Media at the University of Miami. I discovered my passion for user design as an undergrad when I started learning about web development. I found I was most interested in what worked and what didn't from the users' perspective.</p>
                </div>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-once="true" class="row">
            <a href="/about.php">
              <button type="button" class="btn btn-default">More About Me</button>
            </a>
          </div>
        </div>
      </div>


      <div class="resume-container container-fluid text-center space color-panel">
        <div class="container">
          <h6 data-aos="fade-down" data-aos-once="true" class="white">Resume</h6>
          <h1 data-aos="fade" data-aos-once="true" >What I Do</h1>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak"></div>
            </div>
          </div>
          <div class="row" data-aos="fade" data-aos-once="true">
            <div class="col-sm-offset-2 col-sm-8">
              <p class="larger">The tech industry is fast-paced and ever-changing. There are so many innovative ideas out there but they aren't much use if people don't understand how to use the products. I love intuitive designs and believe technology should be easy for everyone to use.</p>
            </div>
          </div>
          <div class="row">
            <div data-aos="fade-right" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="UX/UI Design" src="img/icons/ux-design.png">
              <h4>UX/UI Design</h4>
              <p>From wireframing to prototyping, I enjoy creating interactive experiences that make sense. I have experience using Sketch, InVision, Axure RP, Illustrator, Photoshop and inDesign.</p>
            </div>
            <div data-aos="fade" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="UX Research" src="img/icons/ux-research.png">
              <h4>UX Research</h4>
              <p>Knowing how users think and what they expect is so important to creating products that work. I have conducted card sorts, interviews, ethnography studies, and usability tests.</p>
            </div>
            <div data-aos="fade-left" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="Code" src="img/icons/dev.png">
              <h4>Code</h4>
              <p>I love building sites that are intuitive and easy to use or using coding as a tool to prototype. I can code with HTML, CSS/SCSS, Javascript, PHP, and Wordpress.</p>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-once="true" class="row">
            <a href="/resume.php">
              <button type="button" class="btn btn-reverse">See My Resume</button>
            </a>
          </div>
        </div>
      </div>

      <div class="portfolio-container container-fluid text-center space">
        <div class="container">
          <h6 data-aos="fade-down" data-aos-once="true">Portfolio</h6>
          <h1 data-aos="fade" data-aos-once="true" class="color">My Recent Work</h1>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak color"></div>
            </div>
          </div>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-3 col-sm-6">
              <p class="larger">Check out my favorite projects. You can go to my portfolio to see even more!</p>
            </div>
          </div>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-1 col-sm-10">
              <div class="accordion">
                <ul>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Radio UI</h2>
                          <p>Touch Screen Interface for Police Radios</p>
                        </div>
                        <!-- <a href="about.html">CLICK</a> -->
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Unified Sports App</h2>
                          <p>iOS Application to help orgnanized Unified Sports events.</p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Safety First</h2>
                          <p>A reporting nd dashboard system for nursing home safety.</p>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-once="true" class="row">
            <a href="/portfolio.php">
              <button type="button" class="btn btn-default">See More Projects</button>
            </a>
          </div>
        </div>
      </div>

      <?php include 'templates/footer.php'; ?>


      <script src="js/jquery-3.1.0.min.js"></script>
      <script src="js/aos.js"></script>
      <script>
        // AOS.init();
        $(window).scroll(function() {
          $(".title-text").css("opacity", 1 - $(window).scrollTop() / 250);
        });

      </script>
      <script src="js/parallax.min.js"></script>
      <script src="js/textrotator.js"></script>
      <script src="js/main.js"></script>




    </body>
</html>
