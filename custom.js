$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});
$(document).ready(function(){
    $(".submit").click(function(){
       var pass1 = $('.pass').val();
       var pass2 = $('.pass2').val();
       if(pass1 != pass2){
       		alert("password not match");
       		return false;
       }
    });
});