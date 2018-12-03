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

<div class="calls">
    <h2>CALLS</h2>
  </div>

  <article class="articles">
    <div class="calls1">
    <img alt="proposal" src="<?php echo $this->getThemePath(); ?>/images/banner2.jpg" />
      <h2>Diptych Banner Designs</h2>
      <?php
      $a = new Area('date');
      $a->display($c);
      ?>
      </div>

      <div class="calls2">
        <img alt="proposal" src="<?php echo $this->getThemePath(); ?>/images/prop.png" />
        <h2>Proposal</h2>
        <?php
        $a = new Area('date2');
        $a->display($c);
        ?>
  <a href="https://wvu.qualtrics.com/jfe/form/SV_3qu5Ut9NNPVKiJ7" class="button"><button class="searchbutton" type="submit">PROPOSAL</button></a>
        </div>
  </article>




<?php $this->inc('elements/footer.php'); ?>

</body>
</html>
