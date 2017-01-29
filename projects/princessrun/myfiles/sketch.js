//sprites
var princess;
var flyingDragon;
var clouds;

//sprite groups
var ground;
var groundLayer2;
var groundLayer3;
var bullets;
var overlapTestSprite;
var flyingDragonFireball;
var groundDragonFireball;
var mushrooms;
var orbs;

//images
var groundImage;
var groundImage2;
var groundImage3;
var bgImg;
var smallCloudImg;
var largeCloudImg;
var sky;
var princessPicture;
var jumpPicture;
var backwardFacingStillPrincess;
var shootingPrincess;
var spittingFlyingDragon;
var mushroomImage;
var dragonImage;

//animations
var princessWalking;
var princessWalkingBack;
var flyingDragonSprites;
var princessBend;

//other variables
var GRAVITY = 1;
var JUMP = 15;
var waterTileLastUsed = false;
var firstDragonExists = false;
var groundLayer2Exists = false;
var flyingDirection = 0;
var gameOver = true;
var xValue = 60;
var xDragonPos;
var lastGroundTile;
var gameOver = true;
var mushroomLastSpace = false;
var orbCounter = 0;
var dragonPresent = false;
var hitsToKill = 2;


function startGame(){
  $(".start").hide(200,"swing");
  gameOver = false;
}

function preload() {

  princessWalking = loadAnimation("myfiles/img/princess-01.png", "myfiles/img/princess-02.png", "myfiles/img/princess-03.png", "myfiles/img/princess-02.png","myfiles/img/princess-01.png","myfiles/img/princess-04.png","myfiles/img/princess-05.png","myfiles/img/princess-04.png");
  princessWalkingBack = loadAnimation("myfiles/img/princess-06.png", "myfiles/img/princess-07.png", "myfiles/img/princess-08.png", "myfiles/img/princess-07.png","myfiles/img/princess-06.png","myfiles/img/princess-08.png","myfiles/img/princess-09.png","myfiles/img/princess-08.png");
  princessPicture = loadImage("myfiles/img/princess-01.png");
  princessBend = loadAnimation("myfiles/img/bend-01.png","myfiles/img/bend-08.png");

  jumpPicture = loadImage("myfiles/img/princess-05.png");
  backwardFacingStillPrincess = loadImage("myfiles/img/princess-06.png");
  shootingPrincess = loadImage("myfiles/img/princess-03.png");
  mushroomImage = loadImage("myfiles/img/mushroom-01.png");

  spittingFlyingDragon = loadImage("myfiles/img/flying_dragon-07.png");
  flyingDragonSprites = loadAnimation("myfiles/img/flying_dragon-07.png", "myfiles/img/flying_dragon-08.png", "myfiles/img/flying_dragon-09.png", "myfiles/img/flying_dragon-08.png");

  groundImage = loadImage("myfiles/img/ground-03.png");
  groundImageWater = loadImage("myfiles/img/ground-01.png");
  groundImageDirt = loadImage("myfiles/img/ground-02.png");

  fireball = loadImage("myfiles/img/fire_ball-04.png");
  blueBall = loadImage("myfiles/img/fire_ball-05.png");

  bgImg = loadImage("myfiles/img/background-01.png");
  sky = loadImage("myfiles/img/background-01-01.png");

  $(".restart").hide();
}

function setup() {
  //set-up sprite groups
  ground = new Group();
  groundLayer2 = new Group();
  groundLayer3 = new Group();
  overlapTestSprite = new Group();
  bullets = new Group();
  flyingDragonFireball = new Group();
  // groundDragonFireball = new Group();
  mushrooms = new Group();
  orbs = new Group();
  // dragons = new Group();
  frameRate(60);


  createCanvas(800,450);

  //initial ground
  for (var x = 25; x < 800; x += 50) {
    var groundPiece = createSprite(x,425,50,50);
    groundPiece.addImage(groundImage);
    ground.add(groundPiece);

    groundPiece.setCollider("rectangle",0,0,50,50);
    groundPiece.update();

    //background sprites so princess doesnt fall through ground
    var spritTestPiece = createSprite(x,405,40,10);
    overlapTestSprite.add(spritTestPiece);



  }


  //princess set-up
  princess = createSprite(xValue, 300, 50, 75);
  princess.addImage("still",princessPicture);
  princess.addImage("stillBack",backwardFacingStillPrincess);
  princess.addAnimation("walking_back", princessWalkingBack);
  princess.addAnimation("walking", princessWalking);
  princess.addAnimation("bend", princessBend);
  princess.addImage("shoot", shootingPrincess);
  princess.addImage("jump", jumpPicture);
  princess.setCollider("rectangle",0,0,30,75);

  //flaying dragon set-up
  flyingDragon = createSprite(700,50,300,160);
  flyingDragon.addAnimation("flying", flyingDragonSprites);
  flyingDragon.addImage("shooting", spittingFlyingDragon);

}

function draw() {


  if (gameOver){
    if (princess.position.y> 600){
      princess.changeImage("jump");
      updateSprites(false);
    };
  }




  // if(gameOver && keyWentDown("x")){
  //   newGame();
  // }

  if(!gameOver) {
    //call different functions
    spawnNewGround();
    princessMovement();
    flyingDragonMovement();

    if(princess.position.y > 390){
      die();
    };




    // for(var i = 0; i<flyingDragonFireball.length; i++){
    //   if(princess.overlap(flyingDragonFireball[i])){
    //     die();
    //   }
    // }
  }

    //comera postion moves when princess is at the center of the canvas
    camera.position.x = Math.max(princess.position.x,camera.position.x);


    //drawing the sprites in specific order
    drawSprites(overlapTestSprite);


    camera.off();
    image(sky,0,0);

    image(bgImg, 0, 0);

    camera.on();

    drawSprites(ground);
    drawSprites(groundLayer2);
    drawSprites(groundLayer3);
    drawSprites(mushrooms);
    drawSprite(princess);
    drawSprites(bullets);
    drawSprites(orbs);
    drawSprites(flyingDragonFireball);
    drawSprite(flyingDragon);


    camera.off();
    image(blueBall, width-90, 15);
    textSize(30);
    fill(255,255,255);
    text(orbCounter, width-50, 40);
    camera.on();
}

function spawnNewGround(){
  lastGroundTile = ground[ground.length-1];

  if(lastGroundTile.position.x < ((width / 2) + camera.position.x + 100)){
    var randomNumber = floor(random(0,100));
    var randomNumberOrbs = floor(random(0,100));
    if(randomNumber < 10 && !waterTileLastUsed && !dragonPresent){
      var groundPiece = createSprite((lastGroundTile.position.x+50),441,50,20);
      groundPiece.addImage(groundImageWater);
      ground.add(groundPiece);

      groundPiece.setCollider("rectangle",0,0,50,20);
      groundPiece.update();
      waterTileLastUsed = true;


      var spritTestPiece = createSprite(lastGroundTile.position.x+50,436,40,10);
      overlapTestSprite.add(spritTestPiece);
      spritTestPiece.setCollider("rectangle",0,0,40,10);
      spritTestPiece.update();
      mushroomLastSpace = false;

      if(randomNumberOrbs < 40){
        var singleOrb = createSprite((lastGroundTile.position.x+50),250,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      }



    }else if(randomNumber >= 10 && randomNumber < 50  && !dragonPresent){
      var groundPiece = createSprite((lastGroundTile.position.x+50),425,50,50);
      groundPiece.addImage(groundImageDirt);
      ground.add(groundPiece);

      groundPiece.setCollider("rectangle",0,0,50,50);
      groundPiece.update();


      var groundPiece2 = createSprite((lastGroundTile.position.x+50),375,50,50);
      groundPiece2.addImage(groundImage);
      groundLayer2.add(groundPiece2);

      groundPiece2.setCollider("rectangle",0,0,50,50);
      groundPiece2.update();
      waterTileLastUsed = false;
      mushroomLastSpace = false;

      var spritTestPiece = createSprite(lastGroundTile.position.x+50,355,40,10);
      overlapTestSprite.add(spritTestPiece);
      spritTestPiece.setCollider("rectangle",0,0,40,10);
      spritTestPiece.update();

      if(randomNumberOrbs < 11){
        var singleOrb = createSprite((lastGroundTile.position.x+50),300,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      } else if (randomNumberOrbs >= 11 && randomNumberOrbs <= 20){
        var singleOrb = createSprite((lastGroundTile.position.x+50),150,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      } else if (randomNumberOrbs >=21 && randomNumberOrbs <= 30){
        var singleOrb = createSprite((lastGroundTile.position.x+50),250,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      }

    }else if(randomNumber >= 50 && randomNumber < 60  && !dragonPresent){
      var groundPiece = createSprite((lastGroundTile.position.x+50),425,50,50);
      groundPiece.addImage(groundImageDirt);
      ground.add(groundPiece);

      groundPiece.setCollider("rectangle",0,0,50,50);
      groundPiece.update();


      var groundPiece2 = createSprite((lastGroundTile.position.x+50),375,50,50);
      groundPiece2.addImage(groundImageDirt);
      groundLayer2.add(groundPiece2);

      groundPiece2.setCollider("rectangle",0,0,50,50);
      groundPiece2.update();


      var groundPiece3 = createSprite((lastGroundTile.position.x+50),325,50,50);
      groundPiece3.addImage(groundImage);
      groundLayer3.add(groundPiece3);

      groundPiece3.setCollider("rectangle",0,0,50,50);
      groundPiece3.update();

      var spritTestPiece = createSprite(lastGroundTile.position.x+50,305,40,10);
      overlapTestSprite.add(spritTestPiece);
      spritTestPiece.setCollider("rectangle",0,0,40,10);
      spritTestPiece.update();


      waterTileLastUsed = false;
      mushroomLastSpace = false;

      if(randomNumberOrbs < 30){
        var singleOrb = createSprite((lastGroundTile.position.x+50),200,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      }

    }else{
      var groundPiece = createSprite((lastGroundTile.position.x+50),425,50,50);
      groundPiece.addImage(groundImage);
      ground.add(groundPiece);

      groundPiece.setCollider("rectangle",0,0,50,50);
      groundPiece.update();

      var spritTestPiece = createSprite(lastGroundTile.position.x+50,405,40,10);
      overlapTestSprite.add(spritTestPiece);
      spritTestPiece.setCollider("rectangle",0,0,40,10);
      spritTestPiece.update();

      waterTileLastUsed = false;


      if(randomNumber >= 60 && randomNumber < 70 && !mushroomLastSpace){
        var mushroomSprite = createSprite((lastGroundTile.position.x+50),375,50,50);
        mushroomSprite.addImage(mushroomImage);
        mushrooms.add(mushroomSprite);
        mushroomSprite.setCollider("rectangle",0,0,40,50);
        mushroomSprite.update();
        mushroomLastSpace = true;
      }else{
        mushroomLastSpace = false;
      }

      if(randomNumberOrbs < 11){
        var singleOrb = createSprite((lastGroundTile.position.x+50),300,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      } else if (randomNumberOrbs >= 11 && randomNumberOrbs <= 20){
        var singleOrb = createSprite((lastGroundTile.position.x+50),250,30,30);
        singleOrb.addImage(blueBall);
        orbs.add(singleOrb);

        singleOrb.setCollider("circle",0,0,15);
        singleOrb.update();
      }
    }

    //removed passed ground tiles
    for(var i = 0; i<ground.length; i++){
      if(ground[i].position.x < camera.position.x-width/2 - 100){
        ground[i].remove();
      }
    }
    for(var i = 0; i<groundLayer2.length; i++){
      if(groundLayer2[i].position.x < camera.position.x-width/2 - 100){
        groundLayer2[i].remove();
      }
    }
    for(var i = 0; i<groundLayer3.length; i++){
      if(groundLayer3[i].position.x < camera.position.x-width/2 - 100){
        groundLayer3[i].remove();
      }
    }
    for(var i = 0; i<overlapTestSprite.length; i++){
      if(overlapTestSprite[i].position.x < camera.position.x-width/2 - 100){
        overlapTestSprite[i].remove();
      }
    }
    for(var i = 0; i<orbs.length; i++){
      if(orbs[i].position.x < camera.position.x-width/2 - 100){
        orbs[i].remove();
      }
    }
    for(var i = 0; i<mushrooms.length; i++){
      if(mushrooms[i].position.x < camera.position.x-width/2 - 100){
        mushrooms[i].remove();
      }
    }

  }



}

function princessMovement(){
  princess.velocity.y += GRAVITY;
  princess.collide(ground);
  princess.collide(groundLayer2);
  princess.collide(groundLayer3);

  if(princess.overlap(overlapTestSprite)){
    princess.velocity.y = 0;
  }

  princess.overlap(orbs, collect);


  if(keyDown(LEFT_ARROW)){
    princess.changeAnimation("walking_back");
    princess.velocity.x = -2;
  }
  if(keyWentUp(LEFT_ARROW)){
    princess.changeImage("stillBack");
    princess.velocity.x = 0;
  }

  if(keyDown(RIGHT_ARROW)){
    princess.changeAnimation("walking");
    princess.velocity.x = 2;
  }

  if(keyWentUp(RIGHT_ARROW)){
    princess.changeImage("still");
    princess.velocity.x = 0;
  }


// TO WORK ON: NEED TO FIX BEND ANIMATIONS
  // if(keyWentUp(DOWN_ARROW)){
  //   princess.changeAnimation("bend");
  //   princess.velocity.x = 0;
  // }


  // if(keyDown("x")){
  //   princess.changeImage("shoot");
  // }
  //
  // if(keyWentDown("x")){
  //   var bullet = createSprite(princess.position.x, princess.position.y);
  //
  //   bullet.addImage(blueBall);
  //   bullet.setSpeed(10, 2);
  //   bullet.life = 30;
  //   bullet.setCollider("circle",0,0,15);
  //   bullet.update();
  //   bullets.add(bullet);
  //
  // }

  if(keyDown(UP_ARROW) && ( (princess.overlap(ground)) || (princess.overlap(groundLayer2)) || (princess.overlap(groundLayer3)))) {
    princess.changeImage("jump");
    princess.velocity.y = -JUMP;
  }

  if((princess.position.x - (camera.position.x - (width/2))) <= 10 && princess.velocity.x < 0){
    princess.velocity.x = 0;
  }
}

function flyingDragonMovement(){
  var fireballPosX = flyingDragon.position.x - 80;

  if((flyingDragon.position.x - (camera.position.x - (width/2))) <= 10){
    flyingDirection = 1;
    flyingDragon.mirrorX(-1);
    flyingDragon.setSpeed(2,0);
  }

  if((flyingDragon.position.x - (camera.position.x - (width/2))) >= 700){
    flyingDirection = 0;
    flyingDragon.setSpeed(-1,0);
    flyingDragon.mirrorX(1);
  }


// TO FIX: NEED DRAGON TO GO SAME SPEED WHEN PRINCESS IS MOVING
  // if (princess.velocity.x == 0 && flyingDragon.velocity.x > 0){
  //   flyingDragon.setSpeed(1,0);
  // }


  flyingDragon.update();

  var randomNumberSpitting = floor(random(1,100));


  if(randomNumberSpitting == 1){
    if(flyingDirection == 0){
      var fire = createSprite(flyingDragon.position.x - 80, flyingDragon.position.y);

      fire.addImage(fireball);

      fire.setSpeed(3, 135);
      fire.life = 170;
      fire.rotation = 340;
      flyingDragonFireball.add(fire);

      fire.setCollider("circle",-10,5,10);
      fire.update();
    }else if(flyingDirection == 1) {
      var fire = createSprite(flyingDragon.position.x + 80, flyingDragon.position.y);

      fire.addImage(fireball);

      fire.setSpeed(3, 45);
      fire.life = 170;
      fire.rotation = 230;
      flyingDragonFireball.add(fire);

      fire.setCollider("circle",10,5,10);
      fire.update();

    }

  }


  if(princess.overlap(flyingDragonFireball)){
    die();
  }


}


function collect(princess, orb) {
  orb.remove();
  orbCounter++;
}


function die() {
  princess.velocity.y=10;
  gameOver = true;
  $(".restart").show(200,"swing");
}

function newGame() {
  allSprites.removeSprites();
  ground.removeSprites();
  groundLayer2.removeSprites();
  groundLayer3.removeSprites();
  overlapTestSprite.removeSprites();
  flyingDragonFireball.removeSprites();
  princess.remove();
  flyingDragon.remove();
  mushrooms.removeSprites();
  orbs.removeSprites();
  $(".restart").hide(200,"swing");
  orbCounter = 0;
  camera.position.x = (width/2);

  for (var x = 25; x < 800; x += 50) {
    var groundPiece = createSprite(x,425,50,50);
    groundPiece.addImage(groundImage);
    ground.add(groundPiece);

    groundPiece.setCollider("rectangle",0,0,50,50);
    groundPiece.update();

    //background sprites so princess doesnt fall through ground
    var spritTestPiece = createSprite(x,405,50,10);
    overlapTestSprite.add(spritTestPiece);
    spritTestPiece.setCollider("rectangle",0,0,50,10);
    spritTestPiece.update();
  }

  princess = createSprite(xValue, 300, 50, 75);
  princess.addImage("still",princessPicture);
  princess.addImage("stillBack",backwardFacingStillPrincess);
  princess.addAnimation("walking_back", princessWalkingBack);
  princess.addAnimation("walking", princessWalking);
  princess.addAnimation("bend", princessBend);
  princess.addImage("shoot", shootingPrincess);
  princess.addImage("jump", jumpPicture);
  princess.setCollider("rectangle",0,0,30,75);

  //flaying dragon set-up
  flyingDragon = createSprite(700,50,300,160);
  flyingDragon.addAnimation("flying", flyingDragonSprites);
  flyingDragon.addImage("shooting", spittingFlyingDragon);

  gameOver = false;
  updateSprites(true);

}

function restart() {
  if(gameOver){
    newGame();
  }

}
