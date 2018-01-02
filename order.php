<?php
//require_once('menu-index.php');
require_once('date.php');
require_once('menu.php')
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="menu-index-php">
  <title>注文された品物</title>
</head>
<body>
  <h2>注文票</h2>
  <?php foreach($menus as $menu):?>
    <p><?php echo $_POST[$menu->getName()]; ?></p>
  <?php endforeach ?>

</body>
</html>
