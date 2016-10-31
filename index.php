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
</header>
<br>

<div class="phone">
  <img src="http://lesalonbeaute75017.guinot.com/theme/guinot6/assets/images/phone-icon-home.png" alt="phone">01 30 53 24 50
  </div>
 <div class="bt rouge">
  <a href="promo.php" class="bt-coffret-cadeau">DÉCOUVREZ NOS<br/><span> OFFRES SPÉCIALES</span></a>
</div>
<div class="bt gris">
  <a href="soins.php" class="bt-table">CHOISISSEZ<span> VOTRE SOIN</span></a>
</div>

    <br />

      <div class="carousel">
        <ul id="content-slider" class="content-slider">
  <li>
    <img src="img/Eau Neuve Energic.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Hydrazone TP.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Parfum de Vie.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Huile Mirific.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Hydrazone Yeux.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/Longue Vie Buste.jpg" alt="guinot" />
  </li>
</ul>
<br />
      </div>
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
