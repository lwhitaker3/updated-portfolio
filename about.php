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

      <div class="container-fluid intro-about-container">
        <div class="container">
          <img class="header_picture" alt="coffee" src="img/intro_images-06.png">
          <h1 data-aos="fade-down">ABOUT ME</h1>
        </div>
      </div>


      <div class="aboutPics-wrapper container-fluid text-center space">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="about_pic_wrapper">
                <img class="aboutPics" alt="At Meetup" src="img/louise-01.jpg">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="hidden-xs about_pic_wrapper">
                <img class="aboutPics" alt="Graduation" src="img/louise-02.jpg">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="hidden-xs about_pic_wrapper">
                <img class="aboutPics" alt="Presenting Project" src="img/louise-03.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="about-text container-fluid space">
        <div class="container">
          <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
              <p class="larger-intro">I have always loved design and technology; UX design allows me to bring those two passions together.</p>
            </div>
          </div>
          <div class="row flex">




            <div class="col-sm-8 col-md-offset-1">
              <p class="about-me">My journey to discovering my passion for UX began as an undergrad. I worked at the Department of Housing and Residential Life in the freshman dorms. The hardest part of my job was not dealing with frustrated parents or the 900 freshman residents, it was trying to understand all of the software we used to complete tasks everyday. When I started taking web development classes as junior, I learned about user centered design. If all products were designed with end-users in mind then software would be easier to use and wouldn't be the part of learning a new job that took the longest.</p>
              <p class="about-me">I have lived in Miami for the last 5 years; I graduated with my Bachelor's degree in communication last May and stayed to get my Master's in Interactive Media. In my time at Miami I have had a chance to dive further into UX design and learn more about wireframing tools, UX research methods, and interactive design. I have also had a chance to hone in my web development skills and started learning more about back-end development.</p>
              <p class="about-me">You will likely find me at the Starbucks on campus during the week working with a latte in hand. In my spare time, I love to scrapbook, watch Netflix, and spend time with friends.</p>
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
      <script>
        AOS.init();
      </script>
      <script src="js/parallax.min.js"></script>
      <script src="js/main.js"></script>
    </body>
</html>
