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

<section>

  <div id="box1" class="box blurred-bg tinted">
                      <div class="content">
                        <h1>Salon esthétique Pascaline</h1><br />
  <p>Avec plus de 25 ans d’expérience, Pascale, gérante de l'institut <br />Pascaline vous offre des soins de beauté toujours à la pointe des <br />dernières technologies !</p><br />
  <p>Découvrez tous nos soins haut de gamme à l'institut Pascaline</p><br />
  <p>Notre institut de beauté vous accueille du lundi au samedi <br /><em>(uniquement sur rendez-vous)</em></p>
                      </div>
                    </div>
 <div class="phone pull-right"><img src="http://lesalonbeaute75017.guinot.com/theme/guinot6/assets/images/phone-icon-home.png" alt="phone">01 30 53 24 50
  </div>
 
</section>
      </div>

    <br />

      <div class="carousel">
        <ul id="content-slider" class="content-slider">
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
  <li>
    <img src="img/guinot.jpg" alt="guinot" />
  </li>
</ul><br />
      </div>
 <?php include('footer.php'); ?>
    
    <script src="js/index.js"></script>
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
  </body>
</html>