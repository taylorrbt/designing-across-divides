<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php $this->inc('elements/header.php'); ?>

</head>



<body>
<header>
<div class="location">
  <h2>West Virginia University, Morgantown, WV</h2>
</div>
  <nav>
  <?php
      $ga = new GlobalArea('Header Nav');
      $ga->display();
      ?>
  </nav>
</header>

  <div class="banner">
    <img alt="background1" src="<?php echo $this->getThemePath(); ?>/images/background1.png" />
    <h2>CO-CREATING TOOLS FOR COMMUNITY CHANGE</h2>
    <h1>Designing</h1>
    <h4>Across</h4>
    <h3>Divides</h3>
  </div>

<div class="intro">
    <h2>Meet Your Neighbor</h2>
    <?php
    $a = new Area('intro');
    $a->display($c);
    ?>
<img alt="conference" src="<?php echo $this->getThemePath(); ?>/images/conference.jpg" />
</div>

<section class="homepage">
  <div class="event1">
<?php
$a = new Area('update');
$a->display($c);
?>
  </div>

<div class="slide1 md-col-6">
  <h3>MEET OUR</h3>
  <h2>KEYNOTE SPEAKERS</h2>
  <a href="speakers.html" class="button"><button class="searchbutton" type="submit">LEARN MORE</button></a>
</div>
<div class="slide1img md-col-5">
  <img alt="slide1" src="<?php echo $this->getThemePath(); ?>/images/slide1.jpg" />
</div>

<div class="slide2 md-col-6">
  <h3>JOIN OUR</h3>
  <h2>DESIGNER WORKSHOPS</h2>
  <a href="events.html" class="button"><button class="searchbutton" type="submit">LEARN MORE</button></a>
</div>
<div class="slide2img md-col-6">
  <img alt="photo3" src="<?php echo $this->getThemePath(); ?>/images/photo3.jpg" />
</div>

<div class="slide3 md-col-6">
  <h3>SEE OUR</h3>
  <h2>CASE STUDIES</h2>
  <a href="https://wvu.qualtrics.com/jfe/form/SV_3qu5Ut9NNPVKiJ7" class="button"><button class="searchbutton" type="submit">SHOW CASES</button></a>
</div>
<div class="slide3img md-col-6">
  <img alt="mug" src="<?php echo $this->getThemePath(); ?>/images/mug.jpg" />
</div>

<div class="slide4 md-col-6">
  <h3>CREATE YOUR</h3>
  <h2>DIPTYCH BANNERS</h2>
  <a href="calls.html" class="button"><button class="searchbutton" type="submit">LEARN MORE</button></a>
</div>
<div class="slide4img md-col-6">
  <img alt="banner" src="<?php echo $this->getThemePath(); ?>/images/banner.jpg" />
</div>
</section>

  <div class="whatsnext">
  <h2>WHAT'S NEXT?</h2>
  <p><?php
  $a = new Area('whats next');
  $a->display($c);
  ?></p>
  </div>




<?php $this->inc('elements/footer.php'); ?>
</div>
</body>
</html>
