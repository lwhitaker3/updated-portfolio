var scrolledTo = false;

// SCROLL EASING
$(function() {
  $('a.page-scroll').click(function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length && !target.hasClass( "in" )) {
        window.setTimeout(function(){
          console.log(target);
          $('html, body').animate({
            scrollTop: target.offset().top + 1
          }, 1000);
        })
        return false;
      }
    }
  });
});

$(function() {
  $('a.drawer-scroll').click(function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length && !target.hasClass( "in" )) {
        window.setTimeout(function(){
          console.log(target);
          $('html, body').animate({
            scrollTop: target.offset().top - 60
          }, 1000);
        })
        return false;
      }
    }
  });
});

//SCROLL FUNCTIONS
$(window).scroll(function() {

  // SCROLL STICKY NAVIGATION
  if( $(this).scrollTop() > $('header').height()) {
    $(".main-nav").addClass("main-nav-scrolled");
  } else {
    $(".main-nav").removeClass("main-nav-scrolled");
  }

  //FADE OUT ON SCROLL --NEED TO FIX
  $("img.main_logo").css("animation-fill-mode", "none");
  $(".tagline_header").css("animation-fill-mode", "none");
  $(".social_icon_header").css("animation-fill-mode", "none");
  $(".donate_header").css("animation-fill-mode", "none");
  $(".scroll_header").css("animation-fill-mode", "none");

  $("img.main_logo").css("opacity", 1 - $(window).scrollTop() / 250);
  $(".tagline_header").css("opacity", 1 - $(window).scrollTop() / 250);
  $(".social_icon_header").css("opacity", 1 - $(window).scrollTop() / 250);
  $(".donate_header").css("opacity", 1 - $(window).scrollTop() / 250);
  $(".scroll_header").css("opacity", 1 - $(window).scrollTop() / 250);


  //NUMBER COUNTER from https://inorganik.github.io/countUp.js/
  if (!scrolledTo){
    console.log(scrolledTo);
    var hT = $('#numbers').offset().top,
       hH = $('#numbers').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    // console.log((hT-wH) , wS);
    if (wS > (hT+hH-wH)){
      scrolledTo = true;
      var numAnim1 = new CountUp("number_dollar", 0, 1226, 0, 30);
      var numAnim2 = new CountUp("number_social", 0, 20, 0, 30);
      var numAnim3 = new CountUp("number_good", 0, 130, 0, 30);
     // (target, endVal, decimals, duration, options)

     numAnim1.start();
     numAnim2.start();
     numAnim3.start();


    }


  }

});

// INITAILIZE ANIMATE ON SCROLL - from http://michalsnik.github.io/aos/
AOS.init();


//DRAWERS
$(document).ready(function() {

  $( "#online_link" ).click(function() {
    $('#goodlemon_section').collapse('hide');
    $('#goodness_section').collapse('hide');
    $('#aboutus_section').collapse('hide');
    $('#online_section').collapse('toggle');
  });


  $( "#goodlemon_link" ).click(function() {
    $('#online_section').collapse('hide');
    $('#goodness_section').collapse('hide');
    $('#aboutus_section').collapse('hide');
    $('#goodlemon_section').collapse('toggle');
  });

  $( "#goodness_link" ).click(function() {
    $('#online_section').collapse('hide');
    $('#aboutus_section').collapse('hide');
    $('#goodlemon_section').collapse('hide');
    $('#goodness_section').collapse('toggle');
  });

  $( "#aboutus_link" ).click(function() {
    $('#online_section').collapse('hide');
    $('#goodness_section').collapse('hide');
    $('#goodlemon_section').collapse('hide');
    $('#aboutus_section').collapse('toggle');
  });

  $( ".close_section" ).click(function() {
    $('.collapse').collapse('hide');
  });

});

$('#online_section').on('hidden.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#online_section').on('shown.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#goodness_section').on('hidden.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#goodness_section').on('shown.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#goodlemon_section').on('hidden.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#goodlemon_section').on('shown.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
  $('.grid').masonry({
    itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
    columnWidth: '.grid-sizer',
    percentPosition: true
  });
});
$('#aboutus_section').on('hidden.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});
$('#aboutus_section').on('shown.bs.collapse', function () {
  jQuery(window).trigger('resize').trigger('scroll');
});


$(".grid").on( 'layoutComplete', function(){
  jQuery(window).trigger('resize').trigger('scroll');
});


// PARALLAX - from http://pixelcog.github.io/parallax.js/
$('.intro').parallax({imageSrc: './img/wood_texture.jpg', speed: .4});
$('.break_section').parallax({imageSrc: './img/lemon_break-01.png', speed: .7});
$('.number-section').parallax({imageSrc: './img/lemon_break-02.png', speed: .7});


d3.csv("data.csv", function(error, data){
  if (error) throw error;

  // Set the color domain equal to the three product categories
  var measures = d3.keys(data[0]).filter(function(key){return (key !== "time") && (key !== "day")})


  // console.log(JSON.stringify(data, null, 2)) // to view the structure
  // Define date parser
  var parseTime = d3.time.format("%I:%M %p").parse;
  var formatTime = d3.time.format("%I:%M %p");
  // Format the data field
  data.forEach(function(d){
    d["time"] = parseTime(d["time"])
  });


// Define margins
var margin = {top: 20, right: 80, bottom: 30, left: 50},
width = parseInt(d3.select("#chart").style("width")) - margin.left - margin.right,
height = parseInt(d3.select("#chart").style("height")) - margin.top - margin.bottom;



// Define scales
var xScale = d3.time.scale().range([0, width]);
var yScale = d3.scale.linear().range([height, 0]);
// var color = d3.scale.category10();
var color = d3.scale.ordinal()
  .range(["#6ebc44","#398200" ,"#265101"]);
color.domain(measures);

// Define axes
var xAxis = d3.svg.axis().scale(xScale).orient("bottom").tickFormat(formatTime);
var yAxis = d3.svg.axis().scale(yScale).orient("left");

// Define lines
var line = d3.svg.line()
            .x(function(d) { return xScale(d["date"]); })
            .y(function(d) { return yScale(d["measure"]); });



// Define svg canvas
var svg = d3.select("#chart")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var div = d3.select("body").append("div")
            .attr("class", "tooltip")
            .style("opacity", 0);



// Define responsive behavior
function resize() {
  var width = parseInt(d3.select("#chart").style("width")) - margin.left - margin.right,
  height = parseInt(d3.select("#chart").style("height")) - margin.top - margin.bottom;

  // Update the range of the scale with new width/height
  xScale.range([0, width]);
  yScale.range([height, 0]);

  // Update the axis and text with the new scale
  svg.select('.x.axis')
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);

  svg.select('.y.axis')
    .call(yAxis);

  // Force D3 to recalculate and update the line
  svg.selectAll('.line')
    .attr("d", function(d) { return line(d.datapoints); });

  svg.selectAll('.circle')
    .attr("cx", function(d) { return xScale(d.date); })
    .attr("cy", function(d) { return yScale(d.measure); })

  // Update the tick marks
  // xAxis.ticks(Math.max(width/75, 2));
  // yAxis.ticks(Math.max(height/50, 2));

};

// Call the resize function whenever a resize event occurs



drawGraph();

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);

xAxis.ticks(7);


svg.append("g")
    .attr("class", "y axis")
    .call(yAxis)
    .append("text")
    .attr("class", "label")
    .attr("y", 6)
    .attr("dy", ".71em")
    .attr("dx", ".71em")
    .style("text-anchor", "beginning");
    // .text("Count");


// Call the resize function
d3.select(window).on('resize', resize);
resize();

$('#goodness_section').on('shown.bs.collapse', function () {
  window.setTimeout(resize,50);
});



$("input[type='radio'][name='daySelector']").click(drawGraph);
var legend = svg.append("g")
  .attr("class","legend")
  .attr("transform","translate(50,30)")
  .style("font-size","12px")
  .call(d3.legend);

function drawGraph(){
  // console.log("VICTORY!")
    // Filter the data to only include a single day
    var subset = data.filter(function(el) {return el.day === $("input[type='radio'][name='daySelector']:checked").val()});
    // console.log(JSON.stringify(subset, null, 2))
    // console.log(subset)
    // Reformat data to make it more copasetic for d3
    // data = An array of objects
    // amounts = An array of three objects, each of which contains an array of objects
    var amounts = measures.map(function(category){
      return {category: category, datapoints: subset.map(function(d){
        return {date: d["time"], measure: +d[category], category: category}
      })}
    })

    // console.log(amounts);
    // console.log(JSON.stringify(amounts, null, 2)) // to view the structure

    // Set the domain of the axes
    xScale.domain(d3.extent(subset, function(d) {return d["time"]; }));

    // yScale.domain([0,1000]);
    yScale.domain([0,1200]);

    // Place the axes on the chart


    var category = svg.selectAll(".category")
          .data(amounts);

    var keyValues = category.enter().append("g")
          .attr("class", "category");



    category.transition()
      .duration(1000);

    category.exit()
      .transition()
      .duration(1000)
      .style("opacity", 0)
      .remove();

    var path = category.selectAll("path")
      .data(function(d) {return [d];});
    // console.log(path);

    path.enter()
      .append("path")
      .attr("class", "line")
      .attr("d", function(d) {return line(d.datapoints); })
      .attr("data-legend",function(d) {return d.category})
      .style("stroke", function(d) {return color(d.category); });

    path.transition()
      .duration(1000)
      .attr("d", function(d) {return line(d.datapoints); })
      .attr("data-legend",function(d) { return d.category})
      .style("stroke", function(d) {return color(d.category); });

    path.exit()
      .transition()
      .duration(1000)
      .style("opacity", 0)
      .remove();

    var circles = category.selectAll("circle")
      .data(function(d) {return d.datapoints; });

    circles.enter()
      .append("circle")
      .attr("class", "circle")
      .attr("cx", function(d) { return xScale(d.date); })
      .attr("cy", function(d) { return yScale(d.measure); })
      .attr('r', 5)
      .style("fill", function(d) {return color(d.category); })
      .on("mouseover", function(d) {
        div.transition()
                .duration(200)
                .style("opacity", .9);
        div.html("<span class='bold'>Time: </span>" + formatTime(d.date) + "<br/>"  + "<span class='bold'>" + d.category + ": </span>" + d.measure)
                .style("left", (d3.event.pageX) + "px")
                .style("top", (d3.event.pageY - 28) + "px");
            })
        .on("mouseout", function(d) {
            div.transition()
                .duration(500)
                .style("opacity", 0);
        });

    circles.transition()
      .duration(1000)
      .attr("cx", function(d) { return xScale(d.date); })
      .attr("cy", function(d) { return yScale(d.measure); })

    circles.exit()
      .transition()
      .duration(1000)
      .style("opacity", 0)
      .remove();

      // // console.log(JSON.stringify(d3.values(amounts), null, 2)) // to view the structure
      // console.log(d3.values(amounts)); // to view the structure
      // console.log(amounts);
      // // console.log(amounts.map(function()))


      svg.select(".x.axis")
        .transition()
        .duration(1000)
        .call(xAxis);

       // Update Y Axis
       svg.select(".y.axis")
          .transition()
          .duration(1000)
          .call(yAxis);
  };
});


// d3.legend.js
// (C) 2012 ziggy.jonsson.nyc@gmail.com
// MIT licence

(function() {
d3.legend = function(g) {
  g.each(function() {
    var g= d3.select(this),
        items = {},
        svg = d3.select(g.property("nearestViewportElement")),
        legendPadding = g.attr("data-style-padding") || 5,
        lb = g.selectAll(".legend-box").data([true]),
        li = g.selectAll(".legend-items").data([true])

    lb.enter().append("rect").classed("legend-box",true)
    li.enter().append("g").classed("legend-items",true)

    svg.selectAll("[data-legend]").each(function() {
        var self = d3.select(this);
        // console.log(this);
        items[self.attr("data-legend")] = {
          pos : self.attr("data-legend-pos") || this.getBBox().y,
          color : self.attr("data-legend-color") != undefined ? self.attr("data-legend-color") : self.style("fill") != 'none' ? self.style("fill") : self.style("stroke")
        }
      })

    items = d3.entries(items).sort(function(a,b) { return a.value.pos-b.value.pos})


    li.selectAll("text")
        .data(items,function(d) { return d.key})
        .call(function(d) { d.enter().append("text")})
        .call(function(d) { d.exit().remove()})
        .attr("y",function(d,i) { return i+"em"})
        .attr("x","1em")
        .text(function(d) { ;return d.key})

    li.selectAll("circle")
        .data(items,function(d) { return d.key})
        .call(function(d) { d.enter().append("circle")})
        .call(function(d) { d.exit().remove()})
        .attr("cy",function(d,i) { return i-0.25+"em"})
        .attr("cx",0)
        .attr("r","0.4em")
        .style("fill",function(d) {return d.value.color})

    // Reposition and resize the box
    var lbbox = li[0][0].getBBox()
    lb.attr("x",(lbbox.x-legendPadding))
        .attr("y",(lbbox.y-legendPadding))
        .attr("height",(lbbox.height+2*legendPadding))
        .attr("width",(lbbox.width+2*legendPadding))
  })
  return g
}
})();
