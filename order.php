<?php
require_once('menu.php');
require_once('date.php');
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="menu-index.css">
  <title>注文された品物</title>
</head>
<body class = "order-page">
  <div class="paper">
    <h2 class = order-title>注文票</h2>
    <?php $total = 0 ?>
    <!-- って感じやな -->
    <?php foreach($menus as $menu):?>
      <?php $orderCount = $_POST[$menu->getName()]; ?>
      <?php if($orderCount !== "0"): ?>
        <p class = "name"><?php echo $menu->getName() ?></p>
        <div class="price-box">
          <p class = "number"><?php echo $orderCount ?>品</p>
          <p class = "price"><?php echo $menu->getPrice() * $orderCount ?>円</p>
        </div>
        <?php $total += $menu->getPrice() * $orderCount ?>
      <?php endif ?>
    <?php endforeach ?>
    <p class = "total">合計<?php echo $total ?>円</p>
  </div>
</body>
</html>
