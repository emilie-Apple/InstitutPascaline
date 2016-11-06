<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Institut Pascaline</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="Institut Pascaline">
    <meta name="keywords" content="esthéticienne, soins, visages, manucure, guinot, épilations, esthétique, institut, institut de beauté, corps, bien-être, masque, soins-yeux, beauté, détente, forme, gommage, modelage, maquillage, soins solaires, éclat, teint, beauté, institut de beauté, guinot france, guinot Paris, huiles, crème, lait, lotion, crème Guinot, anti-âge, anti-rides, soins en institut, cabine, cosmétique, esthéticienne à domicile">
    <meta name="title" content="Institut Pascaline, Chatou">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://bigbangburger.com/css/fonts.css'>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  </head>

  <body>

    <header>
      <?php include('menu.php'); ?>
 
<style>
      .map-control {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        font-family: 'Roboto','sans-serif';
        margin: 10px;
        display: none;
      }
      /* Display the control once it is inside the map. */
      #map .map-control { display: block; }

      .selector-control {
        font-size: 14px;
        line-height: 30px;
        padding-left: 5px;
        padding-right: 5px;
      }
    
</style>
 <div class="phone">
  <img src="http://lesalonbeaute75017.guinot.com/theme/guinot6/assets/images/phone-icon-home.png" alt="phone"> 01 30 53 24 50
  </div>
    <div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
  <div class="container clearfix">
    <div class="content grid_2 contactype active" id="contact-mapClick">
      <div class="icon-map"></div>
      <p>Plan</p>
    </div>
    <div class="content grid_2 contactype" id="contact-carClick">
      <div class="icon-car"></div>
      <p>Voiture</p>
    </div>
    <div class="content grid_2 contactype" id="contact-busClick">
      <div class="icon-bus"></div>
      <p>Bus</p>
    </div>

    <div class="content grid_2 contactype" id="contact-bikeClick">
      <div class="icon-bike-2"></div>
      <p>Vélo</p>
    </div>
    <div class="content grid_2 contactype" id="contact-phoneClick">
      <div class="icon-phone"></div>
      <p>Télephone</p>
    </div>
    <div class="content grid_2 contactype omega" id="contact-mailClick">
      <div class="icon-mail"></div>
      <p>Mail</p>
    </div>

    <div class="content grid_12 contactmap" id="contact-map">
      <div class="grid_4">
        <h2>CONTACT</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
        <p class="information"><span><i class="fa fa-phone"></i> 01 30 53 24 50</span> <br/>
        <span><i class="fa fa-mobile fa-2x"></i> 06 07 49 33 63 </span></p>
        <a class="btn" href="http://www.gosur.com/driving-directions/?lang=fr&search-query=itineraire&gclid=COS3mKu0ktACFZEy0wodglsHxw#" target="_blank">Direction</a>
        <div class="clear"></div>
      </div>
      <div class="grid_8 omega">
       <div id="map">
       </div>
      </div>
    </div>

    <div class="content grid_12 contactmap dn" id="contact-car">
      <div class="grid_4">
        <h2>VOITURE</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
        <br><br>
        <div class="btn"><span class="icon-checkmark"></span> Parking reservé</div>
      </div>
      <div class="grid_8 omega">
        <div class="grid_6 omega"><strong>Votre Institut Pascaline</strong> vous réserve un accueil privilegié en vous offrant votre place de parking<br/><em>(à préciser lors de la prise de votre rendez-vous).</em>
        <br/>
        <a class="btn" href="http://www.gosur.com/driving-directions/?lang=fr&search-query=itineraire&gclid=COS3mKu0ktACFZEy0wodglsHxw#" target="_blank">Direction</a>

        </div>
      </div>
    </div>

    <div class="content grid_12 contactmap dn" id="contact-bus">
      <div class="grid_4">
        <h2>BUS</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
        <br><br>
        
      </div>
      <div class="grid_8 omega">
        <div class="grid_6 omega" id="scroll2">
          Possibilité de venir en Bus.<br>
          Ligne 2, 3 et 4 (arrêt La Poste) 
        </div>
      </div>
    </div>

    <div class="content grid_12 contactmap dn" id="contact-bike">
      <div class="grid_4">
        <h2>VELO</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
        <br><br>
        
      </div>
      <div class="grid_8 omega">
        <div class="grid_6 omega">
          <span> Parking à vélo à votre disposition <br/>(local fermé)</span>
        </div>
      </div>
    </div>


    <div class="content grid_12 contactmap dn" id="contact-phone">
      <div class="grid_4">
        <h2>TELEPHONE</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
      </div>
      <div class="grid_8 omega">
        <div class="grid_6 omega">01 30 53 24 50</div>
      </div>
    </div>


    <div class="content grid_12 contactmap dn" id="contact-mail">
      <div class="grid_4">
        <h2>MAIL</h2>
        <p class="information"><span class="icon-location"> Adresse :<br/></span>6 PLACE DU GENERAL DE GAULLE <br/>78400 CHATOU FRANCE</p>
      </div>
      <div class="grid_8 omega">
        <div class="grid_6 omega"><a href="mailto:institutpascaline@gmail.com" class="btn">institutpascaline@gmail.com</a></div>
      </div>
    </div>

    <div class="clear"></div>

   
    <div class="clear"></div>

  </div>
</div>
    <?php include('footer.php'); ?>
    <script>
      var map;
      function initMap() {
        // Create the map with no initial style specified.
        // It therefore has default styling.
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.890154, lng: 2.157964},
          zoom: 13,
          mapTypeControl: false
        });

        // Add a style-selector control to the map.
        var styleControl = document.getElementById('style-selector-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);

        // Set the map's style to the initial value of the selector.
        var styleSelector = document.getElementById('style-selector');
        map.setOptions({styles: styles[styleSelector.value]});

        // Apply new JSON when the user selects a different style.
        styleSelector.addEventListener('change', function() {
          map.setOptions({styles: styles[styleSelector.value]});
        });

      }

      var styles = {
        default: null,
        silver: [
          {
            elementType: 'geometry',
            stylers: [{color: '#f5f5f5'}]
          },
          {
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          },
          {
            elementType: 'labels.text.fill',
            stylers: [{color: '#616161'}]
          },
          {
            elementType: 'labels.text.stroke',
            stylers: [{color: '#f5f5f5'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#bdbdbd'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#eeeeee'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#757575'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#e5e5e5'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#ffffff'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'labels.text.fill',
            stylers: [{color: '#757575'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#dadada'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#616161'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#e5e5e5'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#eeeeee'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#c9c9c9'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          }
        ],

        night: [
          {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
          {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#263c3f'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#6b9a76'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#38414e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{color: '#212a37'}]
          },
          {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9ca5b3'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#746855'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#1f2835'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#f3d19c'}]
          },
          {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{color: '#2f3948'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{color: '#d59563'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#17263c'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#515c6d'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#17263c'}]
          }
        ],

        retro: [
          {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [{color: '#c9b2a6'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'geometry.stroke',
            stylers: [{color: '#dcd2be'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ae9e90'}]
          },
          {
            featureType: 'landscape.natural',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#93817c'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [{color: '#a5b076'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#447530'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#f5f1e6'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{color: '#fdfcf8'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#f8c967'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#e9bc62'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry',
            stylers: [{color: '#e98d58'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry.stroke',
            stylers: [{color: '#db8555'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#806b63'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.fill',
            stylers: [{color: '#8f7d77'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#ebe3cd'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [{color: '#b9d3c2'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#92998d'}]
          }
        ],

        hiding: [
          {
            featureType: 'poi.business',
            stylers: [{visibility: 'off'}]
          },
          {
            featureType: 'transit',
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          }
        ]
      };


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAodqPnA_ceL_hN72rYYsLDSiqEEsgIEE0&callback=initMap"
        async defer></script>

<!--<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>-->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  <script src="js/index.js"></script>
</body>
</html>