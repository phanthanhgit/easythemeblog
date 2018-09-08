// model search
var modal = document.getElementById("myModal");
var modalContent = document.getElementsByClassName("pt-popup-content");
var button = document.getElementById("myBtn");
button.onclick = function() {
  modal.style.display = "block";
  $('body').css("overflow", "hidden");
}
// menu mobi
var MenuBar = document.getElementById("formobimenu");
var menu = document.getElementById("pt-menu");
var openMenu = document.getElementById("pt-bar-menu");
openMenu.onclick = function() {
  $('#formobimenu').addClass("show-menu");
  $('#formobimenu').removeClass("hide-menu");
  $('body').css("overflow", "hidden");
} 

var openSocial = document.getElementById("pt-contact-us");
var contactUs = document.getElementById("contactUs");
openSocial.onclick = function() {
  contactUs.style.display = "block";
  $('body').css("overflow", "hidden");
}
// event click close
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    $('.pt-popup-content').css("transform","translateY(-1em)");
    $('body').css("overflow", "auto");
  }
  if (event.target == MenuBar) {
    $('#formobimenu').removeClass("show-menu");
    $('#formobimenu').addClass("hide-menu");
    $('body').css("overflow", "auto");
  }
  if (event.target == contactUs) {
    contactUs.style.display = "none";
    $('body').css("overflow", "auto");
  }
}

$(document).ready(function(){ 
  $(window).scroll(function(){ 
    if ($(this).scrollTop() > 100) { 
      $('#goTop').fadeIn(); 
    } else { 
      $('#goTop').fadeOut(); 
    } 
  }); 
  $('#goTop').click(function(){ 
    $("html, body").animate({ scrollTop: 0 }, 600); 
    return false; 
  }); 
});

$(document).ready(function(){ 
  $(window).scroll(function(){ 
    if ($(this).scrollTop() >= 181) { 
      $('#myNAV').addClass("pt-fixed"); 
      $('.header').css("margin-bottom", "50px");
    } else { 
      $('#myNAV').removeClass("pt-fixed"); 
      $('.header').css("margin-bottom", "0px");
    } 
  }); 
});
$(window).on("load", function (e) {
	$('.pt-loader-content').delay(1000).css("height", "0px");
	$('.loader').delay(1000).hide();
});