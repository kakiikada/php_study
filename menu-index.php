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
  <title>php練習用メニュー</title>
</head>
<body>
  <header>
    <h1 class = "title">オリジナルレストラン<br><span>メニュー</span></h1>
  </header>
  <main class="class menu container">
    <form class="order-set" action="./order.php" method="post">
      <?php foreach($menuGenres as $menuGenre):?>
        <h2 class = "type"><?php echo $menuGenre ?></h2><br>
        <?php foreach ($menus as $menu):?>
          <?php if($menu->getGenre() == $menuGenre): ?>
            <h3 class = "name"><?php echo $menu->getName() ?></h3><br>
            <p class = "price"><?php echo $menu->getPrice() ?>　円</p><br>
            <p class = "comment"><?php echo $menu->getComment() ?></p><br>
              <select name="<?php echo $menu->getName() ?>">
                <option value="0">個数選択</option>
                <?php for($i = 0;$i <= 10; $i++): ?>
                  <option value ="<?php echo $i ?>"><?php echo $i ?>品</option>
                <?php endfor ?>
              </select><br>
          <?php endif ?>
        <?php endforeach ?>
        <div class="space"></div><br>
      <?php endforeach ?>
      <input class = "order-button"  type="submit" value="注文する">
    </form>
  </main>
  <footer>
    <a href="#top">ページトップへ</a>
  </footer>

</body>
</html>
