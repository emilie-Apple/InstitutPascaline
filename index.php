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
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        
  </head>

  <body>

    <header>
      <?php include('menu.php'); ?>
      <div class="phone">
  <img src="http://lesalonbeaute75017.guinot.com/theme/guinot6/assets/images/phone-icon-home.png" alt="phone"> 01 30 53 24 50
  </div>
  </header>
      
    
<div class ="imgaccueil"><img src="img/estheticienne.jpg"></div>
 <div class="bt rouge">
  <a href="promo.php" class="bt-coffret-cadeau">DÉCOUVREZ NOS<br/><span> OFFRES SPÉCIALES</span></a>
</div>
<div class="bt gris">
  <a href="soins.php" class="bt-table">CHOISISSEZ<span> VOTRE SOIN</span></a>
</div>
<div class="deuximages">

  <a href="http://www.guinot.com/" target="_blank"><img class="img1" src="img/guinot.jpg"></a>
  <a href="https://www.endermologie.com/fr/?gclid=CjwKEAjw19vABRCY2YmkpO2OzTsSJAAzEt8sZA1fZSsuTv-Yx0g1eKVrJk9WoaBPXQ7jO5FYoEKY_xoCfF7w_wcB" target="_blank"><img class="img2" src="img/lpg3.jpg"></a>
</div>
      <div class="carousel">
        <ul id="content-slider" class="content-slider">
  <li>
    <img src="img/Eau Neuve Energic.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/hydrazone1.png" alt="guinot" />
  </li>
  <li>
    <img src="img/serum1.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Huile Mirific.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Longue Vie Buste.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/agelogique1.jpg" alt="guinot" />
  </li>
</ul>
<br />

</div>
<script type="text/javascript" src="http://counter7.01counter.com/private/countertab.js?c=784cbfbf905e4697bf676bae974089da"></script>
<!--<noscript><a href="http://www.compteurdevisite.com" title="compteur de visites gratuit"><img src="http://counter7.01counter.com/private/compteurdevisite.php?c=784cbfbf905e4697bf676bae974089da" border="0" title="compteur de visites gratuit" alt="compteur de visites gratuit"></a>
</noscript>-->
 <?php include('footer.php'); ?>
    
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/js/lightslider.min.js'></script>
    <script type="text/javascript">$(document).ready(function() {
   $("#content-slider").lightSlider({
     auto: true,
     item: 4,
     loop: true,
     controls: true,
     speed: 600,
     pause: 3000,
     keyPress: true,
     mode: 'slide', 
     responsive: [{
       breakpoint: 767,
       settings: {
         item: 3,
         slideMove: 1,
         slideMargin: 6,
       }
     }, {
       breakpoint: 481,
       settings: {
         item: 1,
         slideMove: 1
       }
     }]
   });

 });
    </script>
    <script src="js/index.js"></script>
  </body>
</html>
