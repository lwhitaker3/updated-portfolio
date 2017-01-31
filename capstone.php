<!DOCTYPE html>
<html>
    <head>

        <title>Louise's Portfolio</title>

        <?php include 'templates/head.php'; ?>

    </head>
    <body>


      <?php include 'templates/menu.php'; ?>

      <div class="container-fluid intro-credit-container">
        <div class="container">
          <img class="header_picture fadeIn" alt="graduation cap" src="img/intro_image/cap.png">
          <h1 class="fadeInDown">Capstone Project</h1>
        </div>
      </div>

      <!-- <div class="container-fluid">
        <div class="container">
          <h6 class="center">Project Overview</h6>
          <div class="row">

            <h2 class="center">Magic Mirror</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>

            <div class="col-sm-12">
              <p>Here is where I will describe the project</p>
            </div>
          </div>
        </div>
      </div> -->

      <div class="container-fluid margin-bottom">
        <div class="container">
          <h6 class="center">Documenting the Process</h6>
          <div class="row">

            <h2 class="center">My Journal</h2>
            <div class="row">
              <div class="col-xs-2 col-xs-offset-5">
                <div class="lineBreak color"></div>
              </div>
            </div>

            <div class="col-sm-12">
              <p class="center">Each week I will be documenting the progress of my project.</p>
            </div>



            <div class="col-sm-12 margin-top">
              <p class="headerline">Week 1 (1/17-1/24)</p>
              <h4 class="color">Project Concept</h4>
              <div class="row">
                <div class="col-xs-2">
                  <div class="lineBreak project-steps"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <p>I spent the week trying to commit to a project idea. I decided I wanted to try something completely new. I wanted to focus on user experience while earning how to build a phsyical computing project. My idea: "A magic mirror". This magic mirror will be you personal assistant in the morning. I want to create some that gives a user notfications and updates in the morning. I would like to play with chatbots and a a kinect and intergrate them into the experience to create something fun and unique.</p>
                  <a target="_blank" href="https://docs.google.com/presentation/d/17ASzNvyDi-5P8g6rKTKvkOhWs4ZMsqE667X9-7nPXXA/edit?usp=sharing"> Click here to see the presentation</a>
                </div>
              </div>
            </div>

            <div class="col-sm-12 margin-top">
              <p class="headerline">Week 2 (1/25-1/31)</p>
              <h4 class="color">Timeline</h4>
              <div class="row">
                <div class="col-xs-2">
                  <div class="lineBreak project-steps"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <p>This is the timeline I have developed for the project based on the presentation from last week.</p>
                  <p>The general plan is:</p>
                  <ul>
                    <li>February: Learning Raspberry Pi, Design Documentaion</li>
                    <li>March: Build First Prototype, Test Prototype</li>
                    <li>April: Iterate/Add Features</li>
                    <li>May: Present</li>
                  </ul>
                  <img class="portfolio_picture" alt="Gantt Chart" src="/img/capstone/gantt.jpeg">
                </div>
              </div>
              <h4 class="color">Understanding What I Want to Make</h4>
              <div class="row">
                <div class="col-xs-2">
                  <div class="lineBreak project-steps"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <p> I bought an Amazon Echo to try and started playing with it to see what types of activities I can do with it. I want to add a chat component to my project so I figured playing with an Alexa was a great place to start. The user experience of Alexa is slightly awkward. You can create reminders on it but you can’t set when those reminders are for. You all can’t delete any reminder unless you go to the app which seems to make no sense and is cumbersome. She for the most part understands commands however she struggles to understand the difference between P!nk and Pink Floyd. All I wanted to do with list to P!Nk and apparently I can’t do that, Alexa wants to play Pink Floyd. She lacks personality like Siri, she doesn’t have the same types of comments, and there is no back and forth when having a conversation with Alexa. My favorite flaw; she has trouble hearing commends you give her when she is making noise. So trying to tell her to stop the alarm in the morning is a nightmare. She only understands a list of commands. I still don’t think I fully understand Alexa’s purpose since she doesn’t really seem to be able to do much…</p>
                  <p>This week I also managed to get a Raspberry Pi 2 and a Microsoft Kinect, so I can start playing with them this week.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <p>I have started working with both Open Frameworks and Arduino to learn more about creating both installations and physical computing projects. This is a video of my first physical computing project ever so I had to share. Although this was created with an arduino, however I think this week I will have to move on to a Raspberry Pi to start actually developing the project I want to create. Here’s to month of learning a lot more very quickly about how to develop an internet of things/physical computing project especially using chatbots and a Kinect. </p>
                </div>
                <div class="col-sm-6">
                  <iframe width="100%" height="365" src="https://www.youtube.com/embed/zY5be5Ik8AA" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
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
