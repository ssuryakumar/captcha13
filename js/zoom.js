$(document).ready(function(){
  $("#s1").text("INAUGURATION"); 
  $("#s21").text("Day-2 Events & Workshop");
  $("#s2").text("Paper Presentation, Workshop & Events");
  $("#s22").text("LUNCH");
  $("#s3").text("Lunch");
  $("#s23").text("Day-2 Events(FINALS) & Workshop");
  $("#s4").text("Paper Presentation & Events(FINALS)");
  $("#s24").css({"font-size":"11px","top":"42px"});
  $("#s24").text("Prize Distribution");
  $("#s4").css({"font-size":"10px","top":"38px"});
  $("#s5").text("Certificate Distribution");
  $("#s25").text("Board the Bus");
  $("#i1,#i2,#i3,#i4,#i5,#i21,#i22,#i23,#i24,#i25").hide();
 
    $("#c1").hover(function(){
   // $("#c1").css("background-color","skyblue");
    $("#s1").text("Inauguration starts @9.00am");
    $("#s1").css({"font-size":"10px","top":"50px"});
    $("#c1").css("-webkit-transform","scale(2)");
    $("#c1").css("-moz-transform","scale(2)");
    $("#c1").css("-transform","scale(2)");
    $("#c1").css("-webkit-transition-duration","0.2s");
    $("#c1").css("-moz-transition-duration","0.2s");
    $("#c1").css("-transition-duration","0.2s");
    $("#i1").show(90); 
  },function(){
      $("#i1").hide();
      $("#s1").text("INAUGURATION");
      $("#s1").css({"font-size":"13px","top":"38px"});
      $("#c1").css("-webkit-transform","scale(1)");
      $("#c1").css("-moz-transform","scale(1)");
      $("#c1").css("-transform","scale(1)");
  });
 
$("#c21").hover(function(){
   // $("#c1").css("background-color","skyblue");
    $("#s21").text("Day-2 Events & Workshop");
    $("#s21").css({"font-size":"10px","top":"50px"});
    $("#c21").css("-webkit-transform","scale(2)");
    $("#c21").css("-webkit-transition-duration","0.2s");
    $("#c21").css("-moz-transform","scale(2)");
    $("#c21").css("-moz-transition-duration","0.2s");
    $("#c21").css("-transform","scale(2)");
    $("#c21").css("-transition-duration","0.2s");
    $("#i21").show(90); 
  },function(){
      $("#i21").hide();
      $("#s21").text("Day-2 Events & Workshop");
      $("#s21").css({"font-size":"13px","top":"38px"});
      $("#c21").css("-webkit-transform","scale(1)");
      $("#c21").css("-moz-transform","scale(1)");
      $("#c21").css("-transform","scale(1)");
  });
  

 
$("#c2").hover(function(){
    $("#s2").text("Paper Presentation, Workshop & Events");
    $("#s2").css({"font-size":"9px","top":"50px"});
   // $("#s2").css("-webkit-transform","scale(2)");
   $("#c2").css("-webkit-transform","scale(2)");
    $("#c2").css("-webkit-transition-duration","0.2s");
    $("#c2").css("-moz-transform","scale(2)");
    $("#c2").css("-moz-transition-duration","0.2s");
    $("#c2").css("-transform","scale(2)");
    $("#c2").css("-transition-duration","0.2s");
    $("#i2").show(90);
    
  },function(){
     $("#i2").hide();
      $("#s2").text("Paper Presentation, Workshop & Events");
      $("#s2").css({"font-size":"13px","top":"20px"}); 
      $("#c2").css("-webkit-transform","scale(1)");
      $("#c2").css("-moz-transform","scale(1)");
      $("#c2").css("-transform","scale(1)");
  });
 
$("#c22").hover(function(){
    $("#s22").text("LUNCH");
    $("#s22").css({"font-size":"9px","top":"60px"});
   // $("#s2").css("-webkit-transform","scale(2)");
   $("#c22").css("-webkit-transform","scale(2)");
    $("#c22").css("-webkit-transition-duration","0.2s");
    $("#c22").css("-moz-transform","scale(2)");
    $("#c22").css("-moz-transition-duration","0.2s");
    $("#c22").css("-transform","scale(2)");
    $("#c22").css("-transition-duration","0.2s");
    $("#i22").show(90);
    
  },function(){
     $("#i22").hide();
      $("#s22").text("LUNCH");
      $("#s22").css({"font-size":"13px","top":"40px"}); 
      $("#c22").css("-webkit-transform","scale(1)");
      $("#c22").css("-moz-transform","scale(1)");
      $("#c22").css("-transform","scale(1)");
  });
 
$("#c3").hover(function(){
    $("#s3").text("LUNCH");
    $("#s3").css({"font-size":"13px","top":"50px"});
    $("#c3").css("-webkit-transform","scale(2)");
    $("#c3").css("-webkit-transition-duration","0.2s");
    $("#c3").css("-moz-transform","scale(2)");
    $("#c3").css("-moz-transition-duration","0.2s");
    $("#c3").css("-transform","scale(2)");
    $("#c3").css("-transition-duration","0.2s");
    $("#i3").show(90);
    
    
  },function(){
    $("#s3").text("LUNCH");
    $("#s3").css({"font-size":"13px","top":"38px"});
    $("#c3").css("-webkit-transform","scale(1)");
    $("#c3").css("-moz-transform","scale(1)");
    $("#c3").css("-transform","scale(1)"); 
    $("#i3").hide();
  });
 
$("#c23").hover(function(){
    $("#s23").text("Day-2 Events(FINALS) & Workshop");
    $("#s23").css({"font-size":"10px","top":"48px"});
    $("#c23").css("-webkit-transform","scale(2)");
    $("#c23").css("-webkit-transition-duration","0.2s");
    $("#c23").css("-moz-transform","scale(2)");
    $("#c23").css("-moz-transition-duration","0.2s");
    $("#c23").css("-transform","scale(2)");
    $("#c23").css("-transition-duration","0.2s");
    $("#i23").show(90);
    
    
  },function(){
    $("#s23").text("Day-2 Events(FINALS) & Workshop");
    $("#s23").css({"font-size":"10px","top":"32px"});
    $("#c23").css("-webkit-transform","scale(1)");
    $("#c23").css("-moz-transform","scale(1)");
    $("#i23").hide();
  });
 
$("#c4").hover(function(){
    $("#s4").text("Paper Presentation & Events(FINALS)");
    $("#s4").css({"font-size":"10px","top":"50px"});
    $("#c4").css("-webkit-transform","scale(2)");
    $("#c4").css("-webkit-transition-duration","0.2s");
    $("#c4").css("-moz-transform","scale(2)");
    $("#c4").css("-moz-transition-duration","0.2s");
    $("#i4").show(90);
   
    
  },function(){
    $("#s4").text("Paper Presentation & Events(FINALS)");
    $("#s4").css({"font-size":"10px","top":"38px"});
    $("#c4").css("-webkit-transform","scale(1)");
    $("#c4").css("-moz-transform","scale(1)");
    $("#c4").css("-transform","scale(1)");
    $("#i4").hide();
  });
 
$("#c24").hover(function(){
    $("#s24").text("Prize Distribution");
    $("#s24").css({"font-size":"10px","top":"60px"});
    $("#c24").css("-webkit-transform","scale(2)");
    $("#c24").css("-webkit-transition-duration","0.2s");
    $("#c24").css("-moz-transform","scale(2)");
    $("#c24").css("-moz-transition-duration","0.2s");
    $("#i24").show(90);
   
    
  },function(){
    $("#s24").text("Prize Distribution");
    $("#s24").css({"font-size":"11px","top":"42px"});
    $("#c24").css("-webkit-transform","scale(1)");
     $("#c24").css("-moz-transform","scale(1)");
    $("#c24").css("-transform","scale(1)");
    $("#i24").hide();
  });
 
 
$("#c5").hover(function(){
    $("#s5").text("Certificate Distribution");
    $("#s5").css({"font-size":"13px","top":"50px"});
    $("#c5").css("-webkit-transform","scale(2)");
    $("#c5").css("-webkit-transition-duration","0.2s");
    $("#c5").css("-moz-transform","scale(2)");
    $("#c5").css("-moz-transition-duration","0.2s");
    $("#i5").show(90);
    
    
  },function(){
    $("#s5").text("Certificate Distribution");
    $("#s5").css({"font-size":"13px","top":"38px"});
    $("#c5").css("-webkit-transform","scale(1)");
     $("#c5").css("-moz-transform","scale(1)");
    $("#c5").css("-transform","scale(1)");
    $("#i5").hide();
  });
  
$("#c25").hover(function(){
    $("#s25").text("Board the Bus");
    $("#s25").css({"font-size":"13px","top":"60px"});
    $("#c25").css("-webkit-transform","scale(2)");
    $("#c25").css("-webkit-transition-duration","0.2s");
    $("#c25").css("-moz-transform","scale(2)");
    $("#c25").css("-moz-transition-duration","0.2s");
    $("#i25").show(90);
    
    
  },function(){
    $("#s25").text("Board the Bus");
    $("#s25").css({"font-size":"13px","top":"42px"});
    $("#c25").css("-webkit-transform","scale(1)");
     $("#c25").css("-moz-transform","scale(1)");
    $("#c25").css("-transform","scale(1)");
    $("#i25").hide();
  });
});
