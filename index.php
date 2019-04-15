<?php
  use lib;
  include 'lib/template.php';
  $header = new lib\template("static/tpl/header.tpl");
  $header->set('cdn_jquery', 'https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=');
  $header->set('cdn_bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  $header->set('title', 'user panel');
  $sidebar = new lib\template("static/tpl/sidebar.tpl");
?>
<html>
  <head>
    <?=$header->render();?>
  <body>
    <div class="wrapper">
      <?php $sidebar->render(); ?>
    </div>
  </body>
</html>