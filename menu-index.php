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
  <header>
    <h1 class = "title">オリジナルレストラン<br><span>メニュー</span></h1>
  </header>
  <main class="class menu container">
    <form class="order-set" action="order.php" method="post">
      <?php foreach($menuGenres as $menuGenre):?>
        <h2 class = "type"><?php echo $menuGenre ?></h2><br>
        <?php foreach ($menus as $menu):?>
          <?php if($menu->getGenre() == $menuGenre): ?>
            <h3 class = "name"><?php echo $menu->getName() ?></h3>
            <p class = "price"><?php echo $menu->getPrice() ?>　円</p>
            <p class = "comment"><?php echo $menu->getComment() ?></p>
            <div class="order-button">
              <select class="" name="<?php $menu->getName() ?>">
                <option value="未選択">個数選択</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <input name = <?php echo $menu->getName()?> class = "button" type="submit" value="注文リストに入れる"><br>
              </div>
          <?php endif ?>
        <?php endforeach ?>
        <div class="space"></div><br>
      <?php endforeach ?>
      <input type="submit" value="注文する">
    </form>
  </main>
  <footer></footer>

</body>
</html>
