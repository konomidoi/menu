<?php
require_once('menu.php');
require_once('data.php');

$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);
$menuReviews = $menu->getReviews($reviews);
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
<body>
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>

      <?php if ($menu instanceof Drink): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php else: ?>
        <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
          <img src="/img/heart.png" class='icon-spiciness'>
        <?php endfor ?>
      <?php endif ?>
      <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
    </div>

    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach ($menuReviews as $review): ?>
          <?php $user = $review->getUser($users) ?>
          <div class="review-list-item">
            <div class="review-user">
              <?php if ($user->getGender() == 'male'): ?>
                <img src="/img/male.png" class='icon-user'>
              <?php else: ?>
                <img src="/img/female.png" class='icon-user'>
              <?php endif ?>
              <p><?php echo $user->getName() ?></p>
            </div>
            <p class="review-text"><?php echo $review->getBody() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
  </div>
</body>
</html>
