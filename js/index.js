(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 700;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

var contentTableHeader = [],
    listTableHeader = $(".table-entete > li"),
    ctnrListTableBody = $(".table-corps > ul");

// Stockage des en-têtes
listTableHeader.each(function(i){
  contentTableHeader[i] = $(this).html();
});

// Ajout des en-têtes correspondants dans chaque liste
ctnrListTableBody.each(function(){
  var lists = $(this).find("li");
  
  lists.each(function(i){
    var textToAdd = "<span>"+ contentTableHeader[i] +"</span>";
    $(this).prepend(textToAdd);
  });
});
    $('#contact-car').hide();
    $('#contact-bus').hide();
    $('#contact-bike').hide();
    $('#contact-phone').hide();
    $('#contact-mail').hide();

    $('#contact-carClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-map').show();
    $("#contact-mapClick").addClass("active");

// contact page toogles
$("#contact-mapClick").click(function () {
    $('#contact-car').hide();
    $('#contact-bus').hide();
    $('#contact-bike').hide();
    $('#contact-phone').hide();
    $('#contact-mail').hide();

    $('#contact-carClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-map').show();
    $("#contact-mapClick").addClass("active");
});
$("#contact-carClick").click(function () {
    $('#contact-map').hide();
    $('#contact-bus').hide();
    $('#contact-bike').hide();
    $('#contact-phone').hide();
    $('#contact-mail').hide();

    $('#contact-mapClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-car').show();
    $("#contact-carClick").addClass("active");
});
$("#contact-busClick").click(function () {
    $('#contact-map').hide();
    $('#contact-car').hide();
    $('#contact-bike').hide();
    $('#contact-phone').hide();
    $('#contact-mail').hide();

    $('#contact-mapClick').removeClass("active");
    $('#contact-carClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-bus').show();
    $("#contact-busClick").addClass("active");
});
$("#contact-bikeClick").click(function () {
    $('#contact-map').hide();
    $('#contact-car').hide();
    $('#contact-bus').hide();
    $('#contact-phone').hide();
    $('#contact-mail').hide();

    $('#contact-mapClick').removeClass("active");
    $('#contact-carClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-bike').show();
    $("#contact-bikeClick").addClass("active");
});
$("#contact-phoneClick").click(function () {
    $('#contact-map').hide();
    $('#contact-car').hide();
    $('#contact-bus').hide();
    $('#contact-bike').hide();
    $('#contact-mail').hide();

    $('#contact-mapClick').removeClass("active");
    $('#contact-carClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-mailClick').removeClass("active");

    $('#contact-phone').show();
    $("#contact-phoneClick").addClass("active");
});



$("#contact-mailClick").click(function () {
    $('#contact-map').hide();
    $('#contact-car').hide();
    $('#contact-bus').hide();
    $('#contact-bike').hide();
    $('#contact-phone').hide();

    $('#contact-mapClick').removeClass("active");
    $('#contact-carClick').removeClass("active");
    $('#contact-busClick').removeClass("active");
    $('#contact-bikeClick').removeClass("active");
    $('#contact-phoneClick').removeClass("active");

    $('#contact-mail').show();
    $("#contact-mailClick").addClass("active");
});
//google map
var map;
  function initialize() {
    var mapOptions = {
      zoom: 13,
      center: new google.maps.LatLng(39.949910, 32.788134),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'),
        mapOptions);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
