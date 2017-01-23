// TEXT ROTATOR
var content=["problem solver",
             "creative thinker",
             "Seattleite",
             "coffee addict",
             "Seahawks Fan",
             "ux designer"]
var index = 0;

setTimeout(rotateText, 0);

function rotateText() {


  var word = content[index];
  document.getElementById('change').classList.add("fadeIn");
  document.getElementById('change').innerHTML = word;

  index++;
  if (index == content.length) {
    index=0
  }
  setTimeout(fadeOutText, 2500);
}

function fadeOutText(){
  document.getElementById('change').classList.remove("fadeIn");
  setTimeout(rotateText, 1000);
}

// END TEXT ROTATOR
