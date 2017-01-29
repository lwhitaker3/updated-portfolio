function draw() {


  if (cloud.showing == true){
      clear();
      image(img2, 0, 0, img2.width/6, img2.height/6);
      cloud.show();
      cloud.makeRain();
      cloud.removeRain();
    }

}

var Cloud = function(){
  this.x = 0;
  this.y = 35;
  this.rain = [];
  this.showing = false;
  this.show = function() {
    strokeWeight(2);
    strokeCap(ROUND);
    stroke('white');
    for (var i = 0; i < this.rain.length; i++) {
      if (i%rainSpeed == 0){
        this.rain[i].show();
      }
    }
  }
  this.makeRain = function() {
    if (this.rain.length < 20){
      this.rain.push(new Rain(this.x, this.y));
    }
  }
  this.removeRain = function(){
    for (var i = 0; i < this.rain.length; i++) {
      if (this.rain[i].y > 56){
        this.rain[i].y=34;
        this.rain[i].xPos = random(this.x,this.x+48);
      }
    }
  }
}

var Rain = function(x, y) {
  this.x = x;
  this.y = y;
  this.xPos = random(this.x,this.x+48);
  this.speed = random(1,3);
  this.show = function() {
    line(this.xPos,this.y,this.xPos,this.y+4);
    this.y += this.speed;
  }
}

function rain() {
  cloud.showing = true;
}



console.log(window.location.pathname);
function setup() {
    var canvas = createCanvas(50,60);
    canvas.parent("canvas");
    cloud = new Cloud();
    frameRate(20);
    userInput();
}
function preload(){
  img1 = loadImage("img/weather-01.png");
  img2 = loadImage("img/weather-02.png");
  img3 = loadImage("img/weather-03.png");
  img4 = loadImage("img/weather-04.png");
  img5 = loadImage("img/weather-05.png");
  img6 = loadImage("img/weather-06.png");
  img7 = loadImage("img/weather-07.png");
  img8 = loadImage("img/weather-08.png");
  img9 = loadImage("img/weather-09.png");
  img10 = loadImage("img/weather-10.png");
  img11 = loadImage("img/weather-11.png");
}
