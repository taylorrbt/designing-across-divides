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

<div class="gallery">
    <h2>ARCHIVE</h2>
  </div>
  <div class="photogrid">
      <ul>
        <?php
            $ga = new GlobalArea('photo grid');
            $ga->display();
            ?>
      </ul>
  </div>



<?php $this->inc('elements/footer.php'); ?>

</body>
</html>
