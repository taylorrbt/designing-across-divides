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

<div class="speaker">
    <h2>SPEAKERS</h2>
    <h3>November 2018</h3>
  </div>

  <div class="speaker1 col-md-12">
    <div class="row">
      <div class="col-md-8 column1">
        <h2>ANTIONETTE</h2>
      <h3>CARROLL</h3>
      <img alt="speaker1" src="<?php echo $this->getThemePath(); ?>/images/speakers1.jpg" />
      <ul>
        <li><a href="mailto:"> <img alt="gmail" src="<?php echo $this->getThemePath(); ?>/images/gmail.png" />
</a></li>
        <li><a href="http://www.instagram.com/">      <img alt="insta" src="<?php echo $this->getThemePath(); ?>/images/insta.png" />
</a></li>
        <li><a href="http://www.facebook.com/">      <img alt="fb" src="<?php echo $this->getThemePath(); ?>/images/fb.png" />
</a></li>
      </ul>
    </div>
    <div class="col-md-4">
      <h4><strong>FOUNDER AND CEO OF CREATIVE REACTION LAB</strong></h4>
      <?php
      $a = new Area('speaker');
      $a->display($c);
      ?>
    </div>
  </div><!--closes row-->
  </div>

    <div class="speaker2 col-md-12">
      <div class="row">
        <div class="col-md-8 column1">
      <h2>ANDREW</h2>
      <h3>SHEA</h3>
      <img alt="speaker2" src="<?php echo $this->getThemePath(); ?>/images/speakers2.png" />
        <ul>
          <li><a href="mailto:"> <img alt="gmail" src="<?php echo $this->getThemePath(); ?>/images/gmail.png" />
</a></li>
          <li><a href="http://www.instagram.com/">      <img alt="insta" src="<?php echo $this->getThemePath(); ?>/images/insta.png" />
</a></li>
          <li><a href="http://www.facebook.com/">      <img alt="fb" src="<?php echo $this->getThemePath(); ?>/images/fb.png" />
</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4><strong>DESIGNER AT MANY</strong></h4>
        <?php
        $a = new Area('speaker2');
        $a->display($c);
        ?>
      </div>
    </div>
  </div>

          <div class="formoreinfo col-md-12">
              <h2>FOR MORE INFORMATION, EMAIL US: EFAULKES@MAIL.WVU.EDU</h2>
          </div>



<?php $this->inc('elements/footer.php'); ?>

</body>
</html>
