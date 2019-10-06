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
  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="/js/script.js"></script>
</head>

<body id="top">
  <nav class="nav fixed-top">
    <div class="nav__inner">
      <span class="nav__title">とろちゃんハウス</span>
      <ul class="nav__list">
        <li class="nav__item">
          <a class="" href="#portfolio">とろちゃん Photos</a>
        </li>
        <li class="nav__item">
          <a class="" href="#qa">Q&A</a>
        </li>
      </ul>
    </div>
  </nav>

  <header class="header">
    <div class="header__inner">
      <p class="prof-img__outer">
        <img src="./img/toro.jpg" alt="とろちゃんハウス" class="prof-img">
      </p>
      <h1 id="title" class="header__title">とろちゃんハウス</h1>
      <h3>とろちゃん<?php echo Menu::getCount() ?>匹掲載中♪</h3>
    </div>
  </header>

  <div class="menu-wrapper container">
    <form method="post" action="confirm.php">
      <div class="menu-items">

        <section id="portfolio" class="section portfolio">
          <div class="section__inner">
            <h2 class="section__title">とろちゃん Photos</h2>
            <div class="portfolio__inner">
              <ul class="tabs js-tabs">
                <li class="is-active">1day</li>
                <li>2day</li>
                <li>3day</li>
                <li>4day</li>
                <li>5day</li>
              </ul>

              <div class="tabContents js-tabContents">
                <!-- tab 01 -->
                <div class="tabContents__inner is-active">
                  <h3>portfolio 01</h3>


                </div>

                <!-- tab 02 -->
                <div class="tabContents__inner">
                  <h3>portfolio 02</h3>

                </div>

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
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>枚</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
