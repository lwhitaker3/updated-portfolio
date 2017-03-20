var dashboard;
var current = 1;

$( document ).ready(function() {
    for(var i=1; i<8; i++){
      addQuestionListener(i);
    }
    $('#intro').addClass("display");
});


function addQuestionListener(questionIndex){
  $("input[name='question"+ questionIndex + "']").change(function(){
    $('#next'+questionIndex).addClass("display");
    $('#next'+questionIndex).click(function(){
      $('#counter' + questionIndex).removeClass("current");
      $('#counter' + questionIndex).addClass("finished");
      $('#question'+questionIndex).removeClass("display");
      if($("input[name='question"+ questionIndex + "']:checked").data('selection') == 'yes'){
        $('#response' + questionIndex + 'Yes').addClass("display");
        $('#response' + questionIndex + 'Yes .next').click(function() {
          $('#response' + questionIndex + 'Yes').removeClass("display");
          $('#question' + (questionIndex + 1)).addClass("display");
          $('#counter' + (questionIndex + 1)).addClass("current");

        });
      }else if($("input[name='question"+ questionIndex + "']:checked").data('selection') == 'no'){
        $('#response' + questionIndex + 'No').addClass("display");
        $('#response' + questionIndex + 'No .next').click(function() {
          $('#response' + questionIndex + 'No').removeClass("display");
          $('#question' + (questionIndex + 1)).addClass("display");
          $('#counter' + (questionIndex + 1)).addClass("current");

        });
      }else{
        $('#response' + questionIndex + 'Unsure').addClass("display");
        $('#response' + questionIndex + 'Unsure .next').click(function() {
          $('#response' + questionIndex + 'Unsure').removeClass("display");
          $('#question' + (questionIndex + 1)).addClass("display");
          $('#counter' + (questionIndex + 1)).addClass("current");

        });
      }
    });
  });
}


$( ".counter-btn" ).click(function() {

  for(var i=1; i<8; i++){
    if ($("#counter" + i).hasClass('finished')){
      // console.log( $("#counter" + i).val());
      if(current<$("#counter" + i).val()){
        current = $("#counter" + i).val();
        // console.log(current);
      };
      if($(this).val()<=current){
        if ($(".counter-btn").hasClass('current')){
          $(".counter-btn").removeClass('current');
        };
        for(var i=1; i<8; i++){
          $('#question' + i).removeClass("display");
          $('#response' + i + 'Unsure').removeClass("display");
          $('#response' + i + 'Yes').removeClass("display");
          $('#response' + i + 'No').removeClass("display");
        };
        $('#question' + $(this).val()).addClass("display");
        $('#counter' + $(this).val()).addClass("current");
      };
    };
  };
});


function start(){
  $('#intro').removeClass("display");
  $('#question1').addClass("display");
  $('#counter').addClass("display");
  $('#counter1').addClass("current");
}

function calculate(){
  var score =   parseInt($('input[name="question1"]:checked').val()) + parseInt($('input[name="question2"]:checked').val()) + parseInt($('input[name="question3"]:checked').val()) + parseInt($('input[name="question4"]:checked').val()) + parseInt($('input[name="question5"]:checked').val()) + parseInt($('input[name="question6"]:checked').val()) + parseInt($('input[name="question7"]:checked').val());
  $("#final").addClass("display");
  $('#response7Unsure').removeClass("display");
  $('#response7Yes').removeClass("display");
  $('#response7No').removeClass("display");
  $('#score').html(score);
  $('#counter7').removeClass('current');
  $('#counter7').addClass('finished');
  $('#startOver').click(function() {
    for(var i=1; i<8; i++){
      $("input[name='question"+ i + "']").attr('checked',false);
      $('#next'+ i).removeClass("display");
      $('#counter'+ i).removeClass("finished");
    }
    $("#final").removeClass("display");
    $('#question1').addClass("display");
    $('#counter1').addClass("current");
  });

  var dashboard = new JustGage({
      id: "dashboard",
      value: score,
      min: -5,
      max: 5,
      title: "Your Score",
      label: "",
      customSectors: [{
              color : "#E25041",
              lo : -5,
              hi : -2
            },{
              color : "#FBA026",
              lo : -2,
              hi : 2
            },{
              color : "#00A885",
              lo : 2,
              hi : 5
            }]
    });
}
