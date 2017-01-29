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
        <div class="container flyin-container">
          <h6 data-aos="fade-down" data-aos-once="true">About Me</h6>
          <div class="flex_box row about_row flex">
            <div data-aos="fade-right" data-aos-once="true" class="col-sm-5 flex-vertical-align">
              <h1 class="color">HI THERE!</h1>
              <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                  <div class="lineBreak color"></div>
                </div>
              </div>
              <h3>Let me introduce myself...</h3>
            </div>


            <div data-aos="fade-left" data-aos-once="true" class="col-sm-7">
              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <p class="larger">My name is Louise!  I am a user experience designer from Seattle. I am currently working on my MFA in Interactive Media at the University of Miami with a specialization in UX/UI design and will be graduating in May 2017.</p>
                  <p>I have nearly two years of experience in user experience design, user experience research, and web development. I love that the tech industry is fast-paced, ever-changing, and has so many innovative ideas to make life easier and create new experiences that once seemed impossible. I believe the most successful innovations are the ones that take into account the end user during each stage of development. The reality is, no matter how revolutionary a product is, it can’t succeed if no one can use it. I am passionate about developing experiences that are intuitive and make technology more accessible to everyone.</p>
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
        <div class="container flyin-container">
          <h6 data-aos="fade-down" data-aos-once="true" class="white">Resume</h6>
          <h1 data-aos="fade" data-aos-once="true" >What I Do</h1>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak"></div>
            </div>
          </div>
          <div class="row" data-aos="fade" data-aos-once="true">
            <div class="col-sm-offset-2 col-sm-8">
              <p class="larger">My strength is in my ability to work iteratively and develop rapid prototypes. I enjoy using Agile and Lean UX methodologies to help develop creative solutions to solve problems no matter how complex. User centered design is key to creating useful products. I use my knowledge of  UX design, UX research, and web development to help provide a better experience for users.</p>
            </div>
          </div>
          <div class="row">
            <div data-aos="fade-right" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="UX/UI Design" src="img/icons/ux-design.png">
              <h4>UX Design</h4>
              <p>From wireframes to prototypes, I craft interactive experiences that make sense.</p>
            </div>
            <div data-aos="fade" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="UX Research" src="img/icons/ux-research.png">
              <h4>UX Research</h4>
              <p>Knowledge of how users think and what they expect is critical to helping me create designs that work.</p>
            </div>
            <div data-aos="fade-left" data-aos-once="true" class="col-sm-4">
              <img class="resumeIcons" alt="Code" src="img/icons/dev.png">
              <h4>Code</h4>
              <p>I use code as a tool to build immersive prototypes that can evolve into products that are intuitive and easy to use.</p>
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
        <div class="container flyin-container">
          <h6 data-aos="fade-down" data-aos-once="true">Portfolio</h6>
          <h1 data-aos="fade" data-aos-once="true" class="color">My Recent Work</h1>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4">
              <div class="lineBreak color"></div>
            </div>
          </div>
          <div data-aos="fade" data-aos-once="true" class="row">
            <div class="col-sm-offset-3 col-sm-6">
              <p class="larger">Below are some of my recent projects. Check out my portfolio to see even more work!</p>
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
                          <p>Touch screen interface for police radios</p>
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
                          <p>iOS application to help orgnanize Unified Sports events</p>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                      <a href="#">
                        <div>
                          <h2 class="white">Safety First</h2>
                          <p>A reporting dashboard system for nursing home safety</p>
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
