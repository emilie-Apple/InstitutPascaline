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
        <link rel="stylesheet" href="css/promo.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  </head>
<header>
      <?php include('menu.php'); ?>
</header>

  <body>
    <div class="phone">
  <img src="http://lesalonbeaute75017.guinot.com/theme/guinot6/assets/images/phone-icon-home.png" alt="phone"> 01 30 53 24 50
  </div>
    <div class='promo'>
    <div class="offrekdo">
      <div class="plaisir"><p>Faites plaisir à vos proches <br>en leur offrant une carte cadeau!</p></div>
      <img src="img/guinotkdo.jpg">
    </div>
    <div class="grand-format">
<div class="wrapper">
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo1" src="img/promo1.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Creme âge Summum</h2>
      <p class="">Venez décourir la nouvelle Guinot en promo jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo2" src="img/promo2.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Soins visage</h2>
      <p class="galleryItemIntro">Venez profiter <strong>d'une remise imédiate de 10€ </strong> jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo3" src="img/promo3.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Soins visage + Un Produit </h2>
      <p class="galleryItemIntro">Venez profiter <strong>d'une remise imédiate de 15€</strong> pour l'achat d'un produit Guinot jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>
</div>

<div class="petit-format">
<div class="wrapper">
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo1" src="img/promo1.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Creme âge Summum</h2>
      <p class="">Venez décourir la nouvelle Guinot en promo jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
 
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo2" src="img/promo2.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Soins visage</h2>
      <p class="galleryItemIntro">Venez profiter <strong>d'une remise imédiate de 10€ </strong> jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
  <div class="galleryItem">
    
    <div class="fakeImage">
      <img class="promo3" src="img/promo3.jpg" alt="guinot">
    </div>
    <div class="galleryOverlay">
      <h2 class="galleryItemTitel">Soins visage + Un Produit </h2>
      <p class="galleryItemIntro">Venez profiter <strong>d'une remise imédiate de 15€</strong> pour l'achat d'un produit Guinot jusqu'au 30 Novembre 2016</p>
    </div>
  </div>
  <div class="clear"></div>
</div>
</div>

<!--<div class= "imglpg">
    <img class="lpg" src="img/lpg1.jpg">
  </div>-->
<?php include('footer.php'); ?>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" charset="utf-8" async defer>
  $(".galleryItem").mouseenter(function() {
  var thisoverlay = $(this).find('.galleryOverlay');
  
  thisoverlay.stop(true, true).animate({
    height: '200',
    marginTop: '-220px'
  });
});

$(".galleryItem").mouseleave(function() {
  var thisoverlay = $(this).find('.galleryOverlay');
  
  thisoverlay.stop(true, true).animate({
    height: '30',
    marginTop: '-50px'
  });
});</script>
<script src="js/index.js"></script>
  </body>
</html>