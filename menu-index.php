<?php
require_once('menu.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="menu-index.css">
  <title>php練習用メニュー</title>
</head>
<body>
  <h1>オリジナルレストランメニュー</h1>
  <div class="class menu">
    <?php foreach($menuGenres as $menuGenre):?>
      <h2><?php echo $menuGenre ?></h2>
      <?php foreach ($menus as $menu):?>
        <?php if($menu->getGenre() == $menuGenre): ?>
          <h3 class = "name"><?php echo $menu->getName() ?></h3>
          <p class = "comment"><?php echo $menu->getComment() ?></p>
          <p class = "price"><?php echo $menu->getPrice() ?>　円</p>
          <select class="" name="">
            <option value="未選択">個数選択</option>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select> <br>
          <input class = "button" type="button" name="" value="注文リストに入れる">
        <?php endif ?>
      <?php endforeach ?>
      <div class="space"></div>
    <?php endforeach ?>
  </div>

</body>
</html>
