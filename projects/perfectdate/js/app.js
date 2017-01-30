// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();
var city;
var day;
var category;
var img1
var img2
var img3;
var img4;
var img5;
var img6;
var img7;
var img8;
var img9;
var img10;
var img11;
var rainSpeed;

function userInput() {
  var userInputs = location.href.split(/=|&/);
  var getInputs = [];
  for(var i=0; i<userInputs.length; i++){
    if(i%2 == 1){
      getInputs.push(userInputs[i]);
    }
  }
  console.log(getInputs);
  city = getInputs[0];
  if (city == ""){
    city = "Miami";
  }
  day = getInputs[1];
  category = getInputs[2];
  specificDay(day);
  var base_url = "http://api.openweathermap.org/data/2.5/forecast/daily";
  var app_id = "&appid=db7cd351b06e15caefabe590a6ca5845";
  var units = "&units=imperial";
  var city_url = "?q="+city;
  var count = "&cnt=5"
  var url = base_url + city_url + app_id + units + count;
  loadJSON(url, gotWeather);
}

function specificDay(selectedDay){
  console.log(selectedDay);
  var day = new Date();
  if (selectedDay == "day1"){
    day.setDate(day.getDate());
    document.getElementById('dateChosen').innerHTML =  (day.getMonth()+1) + "/" + day.getDate() + "/" + (day.getYear()+1900);
  } else if (selectedDay == "day2"){
    day.setDate(day.getDate()+1);
    document.getElementById('dateChosen').innerHTML =  (day.getMonth()+1) + "/" + day.getDate() + "/" + (day.getYear()+1900);
  } else if (selectedDay == "day3"){
    day.setDate(day.getDate()+2);
    document.getElementById('dateChosen').innerHTML =  (day.getMonth()+1) + "/" + day.getDate() + "/" + (day.getYear()+1900);
  }  else if (selectedDay == "day4"){
    day.setDate(day.getDate()+3);
    document.getElementById('dateChosen').innerHTML =  (day.getMonth()+1) + "/" + day.getDate() + "/" + (day.getYear()+1900);
  } else if (selectedDay == "day5"){
    day.setDate(day.getDate()+4);
    document.getElementById('dateChosen').innerHTML =  (day.getMonth()+1) + "/" + day.getDate() + "/" + (day.getYear()+1900);
  }
}

function gotWeather(weather) {
  console.log(weather);
  selectedCity = weather.city.name;
  var x;
  var weatherType;
  if (day == "day1"){
    x=0;
  } else if (day == "day2"){
    x=1;
  } else if (day == "day3"){
    x=2;
  }  else if (day == "day4"){
    x=3;
  } else if (day == "day5"){
    x=4;
  }
  document.getElementById('forecast').innerHTML = weather.list[x].weather[0].description;
  document.getElementById('place').innerHTML = selectedCity + ", " + weather.city.country;
  document.getElementById('temp').innerHTML = weather.list[x].temp.day.toFixed(0);
  document.getElementById('min').innerHTML = weather.list[x].temp.min.toFixed(0);
  document.getElementById('max').innerHTML = weather.list[x].temp.max.toFixed(0);
  console.log(weather.list[x].weather[0].id);
  if (weather.list[x].weather[0].id == 200 || weather.list[x].weather[0].id == 201 || weather.list[x].weather[0].id == 202 || weather.list[x].weather[0].id == 210 || weather.list[x].weather[0].id == 211 || weather.list[x].weather[0].id == 212 || weather.list[x].weather[0].id == 221 || weather.list[x].weather[0].id == 230 || weather.list[x].weather[0].id == 231 || weather.list[x].weather[0].id == 232){
    image(img1, 0, 0, img1.width/6, img1.height/6);
    weatherType = "thunder";
  } else if (weather.list[x].weather[0].id == 802 || weather.list[x].weather[0].id == 803){
    image(img2, 0, 0, img2.width/6, img2.height/6);
    weatherType = "cloud";
  } else if (weather.list[x].weather[0].id == 600 || weather.list[x].weather[0].id == 601 || weather.list[x].weather[0].id == 602 || weather.list[x].weather[0].id == 611 || weather.list[x].weather[0].id == 612 || weather.list[x].weather[0].id == 615 || weather.list[x].weather[0].id == 616 || weather.list[x].weather[0].id == 620 || weather.list[x].weather[0].id == 621 || weather.list[x].weather[0].id == 622){
    image(img3, 0, 0, img3.width/6, img3.height/6);
    weatherType = "snow";
  } else if (weather.list[x].weather[0].id == 801){
    image(img4, 0, 0, img4.width/6, img4.height/6);
    weatherType = "partsun";
  } else if (weather.list[x].weather[0].id == 800){
    image(img5, 0, 0, img5.width/6, img5.height/6);
    weatherType = "clear";
  } else if (weather.list[x].weather[0].id == 502 || weather.list[x].weather[0].id == 503 || weather.list[x].weather[0].id == 504 || weather.list[x].weather[0].id == 511 || weather.list[x].weather[0].id == 521 || weather.list[x].weather[0].id == 522 || weather.list[x].weather[0].id == 531){
    rainSpeed = 1;
    weatherType = "heavyrain";
    rain();
  } else if (weather.list[x].weather[0].id == 300 || weather.list[x].weather[0].id == 301 || weather.list[x].weather[0].id == 310 || weather.list[x].weather[0].id == 311){
    rainSpeed = 10;
    weatherType = "lightrain";
    rain();
  } else if (weather.list[x].weather[0].id == 302 || weather.list[x].weather[0].id == 312 || weather.list[x].weather[0].id == 313 || weather.list[x].weather[0].id == 314 || weather.list[x].weather[0].id == 321 || weather.list[x].weather[0].id == 500 || weather.list[x].weather[0].id == 501 || weather.list[x].weather[0].id == 520){
    rainSpeed = 4;
    weatherType = "rain";
    rain();
  } else if (weather.list[x].weather[0].id == 804){
    image(img9, 0, 0, img9.width/6, img9.height/6);
    weatherType = "overcast";
  } else if (weather.list[x].weather[0].id == 701 || weather.list[x].weather[0].id == 952 || weather.list[x].weather[0].id == 953 || weather.list[x].weather[0].id == 954 || weather.list[x].weather[0].id == 955 || weather.list[x].weather[0].id == 956 || weather.list[x].weather[0].id == 957 || weather.list[x].weather[0].id == 958 || weather.list[x].weather[0].id == 959){
    image(img10, 0, 0, img10.width/6, img10.height/6);
    weatherType = "wind";
  } else {
    image(img11, 0, 0, img11.width/6, img11.height/6);
    weatherType = "extreme";
  }


  document.getElementById("linkToWeather").href = "weather.html?city=" + city + "&day=" + day + "&date=" + category;
  document.getElementById("refresh").href = "date_idea.html?city=" + city + "&day=" + day + "&date=" + category;

  var categoryActivities = dateSet[category];
  var tempActivities;
  if(weather.list[x].temp.day>70){
    tempActivities = tempSet["over70"];
  } else{
    tempActivities = tempSet["under70"];
  }
  var weatherActivities = weatherSet[weatherType];

  var possibilities = categoryActivities.intersection(tempActivities).intersection(weatherActivities).getValues();
  if (possibilities.length == 0){
    possibilities.push("Have a Game Night!");
  }
  console.log(possibilities);
  document.getElementById('ideas').innerHTML = possibilities[floor(random(possibilities.length))];

}

function addDay(){

  var weekday=new Array("Sun","Mon","Tues","Wed","Thurs","Fri","Sat")

  var day1 = new Date();
  day1.setDate(day1.getDate());
  document.getElementById('day1').innerHTML =  weekday[day1.getDay()] + " " + day1.getDate();

  var day2 = new Date();
  day2.setDate(day2.getDate()+1);
  document.getElementById('day2').innerHTML = weekday[day2.getDay()] + " " + day2.getDate();

  var day3 = new Date();
  day3.setDate(day3.getDate()+2);
  document.getElementById('day3').innerHTML = weekday[day3.getDay()] + " " + day3.getDate();

  var day4 = new Date();
  day4.setDate(day4.getDate()+3);
  document.getElementById('day4').innerHTML = weekday[day4.getDay()] + " " + day4.getDate();

  var day5 = new Date();
  day5.setDate(day5.getDate()+4);
  document.getElementById('day5').innerHTML = weekday[day5.getDay()] + " " + day5.getDate();

}

function addDay2(){

  var weekday=new Array("Sun","Mon","Tues","Wed","Thurs","Fri","Sat")

  var day1 = new Date();
  day1.setDate(day1.getDate());
  document.getElementById('day1').innerHTML =  weekday[day1.getDay()] + " " + day1.getDate();

  var day2 = new Date();
  day2.setDate(day2.getDate()+1);
  document.getElementById('day2').innerHTML = weekday[day2.getDay()] + " " + day2.getDate();

  var day3 = new Date();
  day3.setDate(day3.getDate()+2);
  document.getElementById('day3').innerHTML = weekday[day3.getDay()] + " " + day3.getDate();

  var day4 = new Date();
  day4.setDate(day4.getDate()+3);
  document.getElementById('day4').innerHTML = weekday[day4.getDay()] + " " + day4.getDate();

  var day5 = new Date();
  day5.setDate(day5.getDate()+4);
  document.getElementById('day5').innerHTML = weekday[day5.getDay()] + " " + day5.getDate();

  var userInputs = location.href.split(/=|&/);
  var getInputs = [];
  for(var i=0; i<userInputs.length; i++){
    if(i%2 == 1){
      getInputs.push(userInputs[i]);
    }
  }
  console.log(getInputs);
  city = getInputs[0];
  day = getInputs[1];
  category = getInputs[2];

  var base_url = "http://api.openweathermap.org/data/2.5/forecast/daily";
  var app_id = "&appid=db7cd351b06e15caefabe590a6ca5845";
  var units = "&units=imperial";
  var city_url = "?q="+city;
  var count = "&cnt=5"
  var url = base_url + city_url + app_id + units + count;
  loadJSON(url, gotWeather2);

}

function gotWeather2(weather) {
  console.log(weather);

  selectedCity = weather.city.name;
  document.getElementById('city').innerHTML = selectedCity;
  document.getElementById('temp1').innerHTML = weather.list[0].temp.day.toFixed(0);
  document.getElementById("link1").href = "date_idea.html?city=" + city + "&day=day1&date=" + category;
  document.getElementById('temp2').innerHTML = weather.list[1].temp.day.toFixed(0);
  document.getElementById("link2").href = "date_idea.html?city=" + city + "&day=day2&date=" + category;
  document.getElementById('temp3').innerHTML = weather.list[2].temp.day.toFixed(0);
  document.getElementById("link3").href = "date_idea.html?city=" + city + "&day=day3&date=" + category;
  document.getElementById('temp4').innerHTML = weather.list[3].temp.day.toFixed(0);
  document.getElementById("link4").href = "date_idea.html?city=" + city + "&day=day4&date=" + category;
  document.getElementById('temp5').innerHTML = weather.list[4].temp.day.toFixed(0);
  document.getElementById("link5").href = "date_idea.html?city=" + city + "&day=day5&date=" + category;

  if (weather.list[0].weather[0].id == 200 || weather.list[0].weather[0].id == 201 || weather.list[0].weather[0].id == 202 || weather.list[0].weather[0].id == 210 || weather.list[0].weather[0].id == 211 || weather.list[0].weather[0].id == 212 || weather.list[0].weather[0].id == 221 || weather.list[0].weather[0].id == 230 || weather.list[0].weather[0].id == 231 || weather.list[0].weather[0].id == 232){
    document.getElementById("pic1").src = "img/weather2-01.png";
  } else if (weather.list[0].weather[0].id == 802 || weather.list[0].weather[0].id == 803){
    document.getElementById("pic1").src = "img/weather2-02.png";
  } else if (weather.list[0].weather[0].id == 600 || weather.list[0].weather[0].id == 601 || weather.list[0].weather[0].id == 602 || weather.list[0].weather[0].id == 611 || weather.list[0].weather[0].id == 612 || weather.list[0].weather[0].id == 615 || weather.list[0].weather[0].id == 616 || weather.list[0].weather[0].id == 620 || weather.list[0].weather[0].id == 621 || weather.list[0].weather[0].id == 622){
    document.getElementById("pic1").src = "img/weather2-03.png";
  } else if (weather.list[0].weather[0].id == 801){
    document.getElementById("pic1").src = "img/weather2-04.png";
  } else if (weather.list[0].weather[0].id == 800){
    document.getElementById("pic1").src = "img/weather2-05.png";
  } else if (weather.list[0].weather[0].id == 502 || weather.list[0].weather[0].id == 503 || weather.list[0].weather[0].id == 504 || weather.list[0].weather[0].id == 511 || weather.list[0].weather[0].id == 521 || weather.list[0].weather[0].id == 522 || weather.list[0].weather[0].id == 531){
    document.getElementById("pic1").src = "img/weather2-06.png";
  } else if (weather.list[0].weather[0].id == 300 || weather.list[0].weather[0].id == 301 || weather.list[0].weather[0].id == 310 || weather.list[0].weather[0].id == 311){
    document.getElementById("pic1").src = "img/weather2-07.png";
  } else if (weather.list[0].weather[0].id == 302 || weather.list[0].weather[0].id == 312 || weather.list[0].weather[0].id == 313 || weather.list[0].weather[0].id == 314 || weather.list[0].weather[0].id == 321 || weather.list[0].weather[0].id == 500 || weather.list[0].weather[0].id == 501 || weather.list[0].weather[0].id == 520){
    document.getElementById("pic1").src = "img/weather2-08.png";
  } else if (weather.list[0].weather[0].id == 804){
    document.getElementById("pic1").src = "img/weather2-09.png";
  } else if (weather.list[0].weather[0].id == 701 || weather.list[0].weather[0].id == 952 || weather.list[0].weather[0].id == 953 || weather.list[0].weather[0].id == 954 || weather.list[0].weather[0].id == 955 || weather.list[0].weather[0].id == 956 || weather.list[0].weather[0].id == 957 || weather.list[0].weather[0].id == 958 || weather.list[0].weather[0].id == 959){
    document.getElementById("pic1").src = "img/weather2-10.png";
  } else {
    document.getElementById("pic1").src = "img/weather2-11.png";
  }


  if (weather.list[1].weather[0].id == 200 || weather.list[1].weather[0].id == 201 || weather.list[1].weather[0].id == 202 || weather.list[1].weather[0].id == 210 || weather.list[1].weather[0].id == 211 || weather.list[1].weather[0].id == 212 || weather.list[1].weather[0].id == 221 || weather.list[1].weather[0].id == 230 || weather.list[1].weather[0].id == 231 || weather.list[1].weather[0].id == 232){
    document.getElementById("pic2").src = "img/weather2-01.png";
  } else if (weather.list[1].weather[0].id == 802 || weather.list[1].weather[0].id == 803){
    document.getElementById("pic2").src = "img/weather2-02.png";
  } else if (weather.list[1].weather[0].id == 600 || weather.list[1].weather[0].id == 601 || weather.list[1].weather[0].id == 602 || weather.list[1].weather[0].id == 611 || weather.list[1].weather[0].id == 612 || weather.list[1].weather[0].id == 615 || weather.list[1].weather[0].id == 616 || weather.list[1].weather[0].id == 620 || weather.list[1].weather[0].id == 621 || weather.list[1].weather[0].id == 622){
    document.getElementById("pic2").src = "img/weather2-03.png";
  } else if (weather.list[1].weather[0].id == 801){
    document.getElementById("pic2").src = "img/weather2-04.png";
  } else if (weather.list[1].weather[0].id == 800){
    document.getElementById("pic2").src = "img/weather2-05.png";
  } else if (weather.list[1].weather[0].id == 502 || weather.list[1].weather[0].id == 503 || weather.list[1].weather[0].id == 504 || weather.list[1].weather[0].id == 511 || weather.list[1].weather[0].id == 521 || weather.list[1].weather[0].id == 522 || weather.list[1].weather[0].id == 531){
    document.getElementById("pic2").src = "img/weather2-06.png";
  } else if (weather.list[1].weather[0].id == 300 || weather.list[1].weather[0].id == 301 || weather.list[1].weather[0].id == 310 || weather.list[1].weather[0].id == 311){
    document.getElementById("pic2").src = "img/weather2-07.png";
  } else if (weather.list[1].weather[0].id == 302 || weather.list[1].weather[0].id == 312 || weather.list[1].weather[0].id == 313 || weather.list[1].weather[0].id == 314 || weather.list[1].weather[0].id == 321 || weather.list[1].weather[0].id == 500 || weather.list[1].weather[0].id == 501 || weather.list[1].weather[0].id == 520){
    document.getElementById("pic2").src = "img/weather2-08.png";
  } else if (weather.list[1].weather[0].id == 804){
    document.getElementById("pic2").src = "img/weather2-09.png";
  } else if (weather.list[1].weather[0].id == 701 || weather.list[1].weather[0].id == 952 || weather.list[1].weather[0].id == 953 || weather.list[1].weather[0].id == 954 || weather.list[1].weather[0].id == 955 || weather.list[1].weather[0].id == 956 || weather.list[1].weather[0].id == 957 || weather.list[1].weather[0].id == 958 || weather.list[1].weather[0].id == 959){
    document.getElementById("pic2").src = "img/weather2-10.png";
  } else {
    document.getElementById("pic2").src = "img/weather2-11.png";
  }



  if (weather.list[2].weather[0].id == 200 || weather.list[2].weather[0].id == 201 || weather.list[2].weather[0].id == 202 || weather.list[2].weather[0].id == 210 || weather.list[2].weather[0].id == 211 || weather.list[2].weather[0].id == 212 || weather.list[2].weather[0].id == 221 || weather.list[2].weather[0].id == 230 || weather.list[2].weather[0].id == 231 || weather.list[2].weather[0].id == 232){
    document.getElementById("pic3").src = "img/weather2-01.png";
  } else if (weather.list[2].weather[0].id == 802 || weather.list[2].weather[0].id == 803){
    document.getElementById("pic3").src = "img/weather2-02.png";
  } else if (weather.list[2].weather[0].id == 600 || weather.list[2].weather[0].id == 601 || weather.list[2].weather[0].id == 602 || weather.list[2].weather[0].id == 611 || weather.list[2].weather[0].id == 612 || weather.list[2].weather[0].id == 615 || weather.list[2].weather[0].id == 616 || weather.list[2].weather[0].id == 620 || weather.list[2].weather[0].id == 621 || weather.list[2].weather[0].id == 622){
    document.getElementById("pic3").src = "img/weather2-03.png";
  } else if (weather.list[2].weather[0].id == 801){
    document.getElementById("pic3").src = "img/weather2-04.png";
  } else if (weather.list[2].weather[0].id == 800){
    document.getElementById("pic3").src = "img/weather2-05.png";
  } else if (weather.list[2].weather[0].id == 502 || weather.list[2].weather[0].id == 503 || weather.list[2].weather[0].id == 504 || weather.list[2].weather[0].id == 511 || weather.list[2].weather[0].id == 521 || weather.list[2].weather[0].id == 522 || weather.list[2].weather[0].id == 531){
    document.getElementById("pic3").src = "img/weather2-06.png";
  } else if (weather.list[2].weather[0].id == 300 || weather.list[2].weather[0].id == 301 || weather.list[2].weather[0].id == 310 || weather.list[2].weather[0].id == 311){
    document.getElementById("pic3").src = "img/weather2-07.png";
  } else if (weather.list[2].weather[0].id == 302 || weather.list[2].weather[0].id == 312 || weather.list[2].weather[0].id == 313 || weather.list[2].weather[0].id == 314 || weather.list[2].weather[0].id == 321 || weather.list[2].weather[0].id == 500 || weather.list[2].weather[0].id == 501 || weather.list[2].weather[0].id == 520){
    document.getElementById("pic3").src = "img/weather2-08.png";
  } else if (weather.list[2].weather[0].id == 804){
    document.getElementById("pic3").src = "img/weather2-09.png";
  } else if (weather.list[2].weather[0].id == 701 || weather.list[2].weather[0].id == 952 || weather.list[2].weather[0].id == 953 || weather.list[2].weather[0].id == 954 || weather.list[2].weather[0].id == 955 || weather.list[2].weather[0].id == 956 || weather.list[2].weather[0].id == 957 || weather.list[2].weather[0].id == 958 || weather.list[2].weather[0].id == 959){
    document.getElementById("pic3").src = "img/weather2-10.png";
  } else {
    document.getElementById("pic3").src = "img/weather2-11.png";
  }


  if (weather.list[3].weather[0].id == 200 || weather.list[3].weather[0].id == 201 || weather.list[3].weather[0].id == 202 || weather.list[3].weather[0].id == 210 || weather.list[3].weather[0].id == 211 || weather.list[3].weather[0].id == 212 || weather.list[3].weather[0].id == 221 || weather.list[3].weather[0].id == 230 || weather.list[3].weather[0].id == 231 || weather.list[3].weather[0].id == 232){
    document.getElementById("pic4").src = "img/weather2-01.png";
  } else if (weather.list[3].weather[0].id == 802 || weather.list[3].weather[0].id == 803){
    document.getElementById("pic4").src = "img/weather2-02.png";
  } else if (weather.list[3].weather[0].id == 600 || weather.list[3].weather[0].id == 601 || weather.list[3].weather[0].id == 602 || weather.list[3].weather[0].id == 611 || weather.list[3].weather[0].id == 612 || weather.list[3].weather[0].id == 615 || weather.list[3].weather[0].id == 616 || weather.list[3].weather[0].id == 620 || weather.list[3].weather[0].id == 621 || weather.list[3].weather[0].id == 622){
    document.getElementById("pic4").src = "img/weather2-03.png";
  } else if (weather.list[3].weather[0].id == 801){
    document.getElementById("pic4").src = "img/weather2-04.png";
  } else if (weather.list[3].weather[0].id == 800){
    document.getElementById("pic4").src = "img/weather2-05.png";
  } else if (weather.list[3].weather[0].id == 502 || weather.list[3].weather[0].id == 503 || weather.list[3].weather[0].id == 504 || weather.list[3].weather[0].id == 511 || weather.list[3].weather[0].id == 521 || weather.list[3].weather[0].id == 522 || weather.list[3].weather[0].id == 531){
    document.getElementById("pic4").src = "img/weather2-06.png";
  } else if (weather.list[3].weather[0].id == 300 || weather.list[3].weather[0].id == 301 || weather.list[3].weather[0].id == 310 || weather.list[3].weather[0].id == 311){
    document.getElementById("pic4").src = "img/weather2-07.png";
  } else if (weather.list[3].weather[0].id == 302 || weather.list[3].weather[0].id == 312 || weather.list[3].weather[0].id == 313 || weather.list[3].weather[0].id == 314 || weather.list[3].weather[0].id == 321 || weather.list[3].weather[0].id == 500 || weather.list[3].weather[0].id == 501 || weather.list[3].weather[0].id == 520){
    document.getElementById("pic4").src = "img/weather2-08.png";
  } else if (weather.list[3].weather[0].id == 804){
    document.getElementById("pic4").src = "img/weather2-09.png";
  } else if (weather.list[3].weather[0].id == 701 || weather.list[3].weather[0].id == 952 || weather.list[3].weather[0].id == 953 || weather.list[3].weather[0].id == 954 || weather.list[3].weather[0].id == 955 || weather.list[3].weather[0].id == 956 || weather.list[3].weather[0].id == 957 || weather.list[3].weather[0].id == 958 || weather.list[3].weather[0].id == 959){
    document.getElementById("pic4").src = "img/weather2-10.png";
  } else {
    document.getElementById("pic4").src = "img/weather2-11.png";
  }

  if (weather.list[4].weather[0].id == 200 || weather.list[4].weather[0].id == 201 || weather.list[4].weather[0].id == 202 || weather.list[4].weather[0].id == 210 || weather.list[4].weather[0].id == 211 || weather.list[4].weather[0].id == 212 || weather.list[4].weather[0].id == 221 || weather.list[4].weather[0].id == 230 || weather.list[4].weather[0].id == 231 || weather.list[4].weather[0].id == 232){
    document.getElementById("pic5").src = "img/weather2-01.png";
  } else if (weather.list[4].weather[0].id == 802 || weather.list[4].weather[0].id == 803){
    document.getElementById("pic5").src = "img/weather2-02.png";
  } else if (weather.list[4].weather[0].id == 600 || weather.list[4].weather[0].id == 601 || weather.list[4].weather[0].id == 602 || weather.list[4].weather[0].id == 611 || weather.list[4].weather[0].id == 612 || weather.list[4].weather[0].id == 615 || weather.list[4].weather[0].id == 616 || weather.list[4].weather[0].id == 620 || weather.list[4].weather[0].id == 621 || weather.list[4].weather[0].id == 622){
    document.getElementById("pic5").src = "img/weather2-03.png";
  } else if (weather.list[4].weather[0].id == 801){
    document.getElementById("pic5").src = "img/weather2-04.png";
  } else if (weather.list[4].weather[0].id == 800){
    document.getElementById("pic5").src = "img/weather2-05.png";
  } else if (weather.list[4].weather[0].id == 502 || weather.list[4].weather[0].id == 503 || weather.list[4].weather[0].id == 504 || weather.list[4].weather[0].id == 511 || weather.list[4].weather[0].id == 521 || weather.list[4].weather[0].id == 522 || weather.list[4].weather[0].id == 531){
    document.getElementById("pic5").src = "img/weather2-06.png";
  } else if (weather.list[4].weather[0].id == 300 || weather.list[4].weather[0].id == 301 || weather.list[4].weather[0].id == 310 || weather.list[4].weather[0].id == 311){
    document.getElementById("pic5").src = "img/weather2-07.png";
  } else if (weather.list[4].weather[0].id == 302 || weather.list[4].weather[0].id == 312 || weather.list[4].weather[0].id == 313 || weather.list[4].weather[0].id == 314 || weather.list[4].weather[0].id == 321 || weather.list[4].weather[0].id == 500 || weather.list[4].weather[0].id == 501 || weather.list[4].weather[0].id == 520){
    document.getElementById("pic5").src = "img/weather2-08.png";
  } else if (weather.list[4].weather[0].id == 804){
    document.getElementById("pic5").src = "img/weather2-09.png";
  } else if (weather.list[4].weather[0].id == 701 || weather.list[4].weather[0].id == 952 || weather.list[4].weather[0].id == 953 || weather.list[4].weather[0].id == 954 || weather.list[4].weather[0].id == 955 || weather.list[4].weather[0].id == 956 || weather.list[4].weather[0].id == 957 || weather.list[4].weather[0].id == 958 || weather.list[4].weather[0].id == 959){
    document.getElementById("pic5").src = "img/weather2-10.png";
  } else {
    document.getElementById("pic5").src = "img/weather2-11.png";
  }
  console.log("pic1"+document.getElementById("pic1").src);
  console.log("pic2"+document.getElementById("pic2").src);
  console.log("pic3"+document.getElementById("pic3").src);
  console.log("pic4"+document.getElementById("pic4").src);
  console.log("pic5"+document.getElementById("pic5").src);


}



var StringSet = function() {
  this.values={};
};
StringSet.prototype.add = function(addValue){
  this.values[addValue] = true;
};
StringSet.prototype.addAll = function(arg1, arg2){
  var args = Array.prototype.slice.call(arguments);
  args.forEach(this.add, this);
  return this;
};
StringSet.prototype.getValues = function(){
  return Object.keys(this.values);
};
StringSet.prototype.has = function (testValue){
  return this.values[testValue] == true;
};
StringSet.prototype.toString = function () {
  this.getValues().toString();
};
StringSet.prototype.intersection = function (anotherSet) {
  var compare = new StringSet();
  this.getValues().forEach(function(value){
    if (anotherSet.has(value)){
      compare.add(value);
    }
  });
  return compare;
};

var tempSet = {};
var weatherSet = {};
var dateSet = {};

dateSet["category0"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Stargaze",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Make a bonfire",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Rent a kayak",
  "Go to a sports game",
  "See a show a your local theatre",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
dateSet["category1"] = new StringSet().addAll(
  "Go get coffee",
  "Go see a movie",
  "Find a new bar",
  "Try a new restaurant",
  "Go for a walk around town",
  "Get ice cream"
);
dateSet["category2"] = new StringSet().addAll(
  "Bake cookies",
  "Find a good brunch place",
  "Create your own recipe",
  "Have a picnic at a park",
  "Try a new restaurant",
  "Get dressed up and eat at a fancy restaurant",
  "Have a cook off",
  "Get ice cream",
  "Have a fondue night"
);
dateSet["category3"] = new StringSet().addAll(
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Go see a movie",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a museum",
  "Go bowling",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Go ice skating",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Rent a kayak",
  "Go to a sports game",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Go to an arcade"
);
dateSet["category4"] = new StringSet().addAll(
  "Go dancing",
  "Go on a bike ride",
  "Find a beautiful hike",
  "Go ice skating",
  "Play tennis",
  "Go horseback riding",
  "Rent a kayak",
  "Laser tag",
  "Train for a race",
  "Try a fitness class"
);
dateSet["category5"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Create your own recipe",
  "Watch funny YouTube Videos",
  "Stargaze",
  "Have a cook off",
  "Buy a new video game and figure out together",
  "Have a fondue night"
);
dateSet["category6"] = new StringSet().addAll(
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Stargaze",
  "Have a picnic at a park",
  "Go dancing",
  "Get dressed up and eat at a fancy restaurant",
  "Find a beautiful hike",
  "Go horseback riding"
);
dateSet["category7"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Stargaze",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go dancing",
  "Go to a museum",
  "Go bowling",
  "Make a bonfire",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Have your own photoshoot around the city",
  "Laser tag",
  "Find a local market",
  "Fly kites",
  "Train for a race",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
dateSet["category8"] = new StringSet().addAll(
  "Go to one of the top ten tourist attractions in your city",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Go horseback riding",
  "Go karting",
  "Find something on Groupon",
  "Rent a kayak",
  "Go bungee jumping"
);
dateSet["category9"] = new StringSet().addAll(
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go for a walk around town",
  "Karaoke",
  "See a show a your local theatre",
  "Go to a trivia night"
);

weatherSet["thunder"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Have a cook off",
  "Have a fondue night"
);
weatherSet["cloud"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go ice skating",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Go to a sports game",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["snow"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go ice skating",
  "Have a cook off",
  "Have a fondue night"
);
weatherSet["partsun"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Make a bonfire",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Rent a kayak",
  "Go to a sports game",
  "See a show a your local theatre",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["clear"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Stargaze",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Make a bonfire",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Rent a kayak",
  "Go to a sports game",
  "See a show a your local theatre",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["heavyrain"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go to a thrift store and pick out ridiculous outfits",
  "Volunteer at the Humane Society",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Find something on Groupon",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the aquarium",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["lightrain"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go to a thrift store and pick out ridiculous outfits",
  "Volunteer at the Humane Society",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Find something on Groupon",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the aquarium",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["rain"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go to a thrift store and pick out ridiculous outfits",
  "Volunteer at the Humane Society",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Find something on Groupon",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the aquarium",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["overcast"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Find something on Groupon",
  "Go to a sports game",
  "See a show a your local theatre",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["wind"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Go to a thrift store and pick out ridiculous outfits",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go for a walk around town",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Go to a sports game",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
weatherSet["extreme"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Have a cook off",
  "Have a fondue night"
);
tempSet["under70"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Make a bonfire",
  "Go to a thrift store and pick out ridiculous outfits",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go for a walk around town",
  "Go ice skating",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Find something on Groupon",
  "Go to a sports game",
  "See a show a your local theatre",
  "Laser tag",
  "Go to the aquarium",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
tempSet["over70"] = new StringSet().addAll(
  "Have a game night",
  "Bake cookies",
  "Find movie you have both never seen on Netflix",
  "Go to one of the top ten tourist attractions in your city",
  "Find a good brunch place",
  "Create your own recipe",
  "Go get coffee",
  "Go see a movie",
  "Watch funny YouTube Videos",
  "Stargaze",
  "Have a picnic at a park",
  "Go mini golfing",
  "Go to a paint night",
  "Find a new bar",
  "Go dancing",
  "Try a new restaurant",
  "Go to a museum",
  "Get dressed up and eat at a fancy restaurant",
  "Go bowling",
  "Make a bonfire",
  "Go on a bike ride",
  "Go to a thrift store and pick out ridiculous outfits",
  "Find a beautiful hike",
  "Look up events in local paper and pick one",
  "Volunteer at the Humane Society",
  "Go to the beach",
  "Go for a walk around town",
  "Karaoke",
  "Have a cook off",
  "Go on a tour of a winery or brewery",
  "Play tennis",
  "Go horseback riding",
  "Go karting",
  "Go to IKEA",
  "Buy a new video game and figure out together",
  "Have your own photoshoot around the city",
  "Find something on Groupon",
  "Rent a kayak",
  "Go to a sports game",
  "See a show a your local theatre",
  "Get ice cream",
  "Laser tag",
  "Go to the zoo",
  "Go to the aquarium",
  "Find a local market",
  "Go bungee jumping",
  "Fly kites",
  "Train for a race",
  "Try a fitness class",
  "Attend a class at community center",
  "Have a fondue night",
  "Go to a trivia night",
  "Go to an arcade"
);
