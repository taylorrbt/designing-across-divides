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

<div class="events">
    <h2>EVENTS</h2>
  </div>
<iframe src="https://calendar.google.com/calendar/embed?src=tbthomas%40mix.wvu.edu&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>


<?php $this->inc('elements/footer.php'); ?>

</body>
</html>
