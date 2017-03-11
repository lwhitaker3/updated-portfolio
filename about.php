<!DOCTYPE html>
<html>
    <head>

        <title>About Louise</title>

        <?php include 'templates/head.php'; ?>

    </head>


    <body>
      <?php include 'templates/menu.php'; ?>

      <div class="container-fluid intro-about-container">
        <div class="container">
          <img class="header_picture fadeIn" alt="coffee" src="img/intro_image/coffee.png">
          <h1 class="fadeInDown">ABOUT ME</h1>
        </div>
      </div>


      <div class="aboutPics-wrapper container-fluid text-center space">
        <div class="container flyin-container">
          <div class="row">
            <div class="col-sm-4">
              <div data-aos="fade-right" data-aos-once="true" class="hidden-xs about_pic_wrapper">
                <img class="aboutPics" alt="At Meetup" src="img/photos/louise-01.jpg">
              </div>
            </div>
            <div class="col-sm-4">
              <div data-aos="fade" data-aos-once="true" class="about_pic_wrapper">
                <img class="aboutPics" alt="Graduation" src="img/photos/louise-02.jpg">
              </div>
            </div>
            <div class="col-sm-4">
              <div data-aos="fade-left" data-aos-once="true" class="hidden-xs about_pic_wrapper">
                <img class="aboutPics" alt="Presenting Project" src="img/photos/louise-03.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="about-text container-fluid space">
        <div class="container">
          <!-- <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
              <p class="larger-intro">I have always loved design and technology; UX design allows me to bring those two passions together.</p>
            </div>
          </div> -->
          <div class="row flex">




            <div class="col-sm-8 col-md-offset-1">
              <p class="about-me">I graduated with my bachelor's degree in communication in May of 2015 from the University of Miami and continued on to get my master's in Interactive Media. While working towards my master’s, I have had a chance to dive further into UX design and learn more about wireframing and prototyping tools, UX research methods, human factors, and interaction design. I’ve also had the opportunity to sharpen my web development skills and become acquainted with back-end development and database design.</p>
              <p class="about-me">As an undergrad, I worked at the Department of Housing and Residential Life in the freshman dorms. The hardest part of my job wasn’t dealing with frustrated parents or the 900 freshman residents, it was trying to understand all of the software we used to complete everyday tasks. When I was introduced to user-centered design, I realized that if all products were designed with the end-user in mind, then the software wouldn't be the hardest part of mastering a new job.</p>
              <p class="about-me">To me, UX design is like a giant puzzle. It’s about solving problems big and small and making sure all the parts fit together to create a cohesive experience. I love that it’s logical and creative at the same time. There’s no single answer; it's about finding the solution that best fits the situation.</p>
              <p class="about-me">I am originally from Seattle, but I have lived in Miami for the last 5 years. When I graduate, I am looking to move back to Seattle, despite the gloomy weather. I’m a proud Seahawks fan and coffee addict, so I like to think that I am still a true Seattleite at heart.</p>
            </div>

            <div class="quick-facts col-sm-4 col-md-3 flex-vertical-align hidden-xs">
              <div class='list-wrapper'>
                <h5>Alma Mater</h5>
                <p class="list first last">University of Miami</p>
                <h5>Hometown</h5>
                <p class="list first last">Seattle</p>
                <h5>Hobbies</h5>
                <p class="list first">Scrapbooking</p>
                <p class="list">Getting Steps</p>
                <p class="list">Solving Puzzles</p>
                <p class="list">Drinking Coffee</p>
              </div>
            </div>



          </div>
        </div>
      </div>




      <?php include 'templates/footer.php'; ?>




      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/parallax.min.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>
