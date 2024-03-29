<?php
require_once('data.php');
require_once('menu.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>とろちゃん Photos</title>
  <!-- stylesheets -->
  <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body id="top">
  <nav class="nav fixed-top">
    <div class="nav__inner">
      <span class="nav__title">とろちゃんハウス</span>
    </div>
  </nav>

  <header class="header">
    <div class="header__inner">
      <p class="prof-img__outer">
        <img src="./img/toro.jpg" alt="とろちゃんハウス" class="prof-img">
      </p>
      <h1 id="title" class="header__title">とろちゃんハウス</h1>
      <h3>とろちゃん<?php echo Menu::getCount() ?>種掲載中♪</h3>
    </div>
  </header>

  <div class="menu-wrapper container">
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <h2 class="menu__title">とろちゃん Photos</h2>
        <p>人気の写真は❤️マークがついてるよ</p>
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <a href="show.php?name=<?php echo $menu->getName() ?>">
                <?php echo $menu->getName() ?>
              </a>
            </h3>
            <?php if ($menu instanceof Drink): ?>
              <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <?php else: ?>
              <?php for ($i=0; $i<$menu->getSpiciness(); $i++): ?>
                <img src="/img/heart.png" class='icon-spiciness'>
              <?php endfor ?>
            <?php endif ?>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="number" value="0" name="<?php echo $menu->getName() ?>">
            <span>枚</span>
          </div>
          <!-- menu-item -->
        <?php endforeach ?>
      </div>
      <!-- menu-items -->
      <input type="submit" value="注文する">
    </form>
  </div>
  <!-- menu-wrapper container -->
</body>
</html>
