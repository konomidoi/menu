<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUICE', 600, '/img/toro01.jpg', '公園');
$coffee = new Drink('COFFEE', 500, '/img/toro02.jpg', 'DQW');
$curry = new Food('CURRY', 900, '/img/toro03.jpg', 3);
$pasta = new Food('PASTA', 1200, '/img/toro04.jpg', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('cat', 'male');
$user2 = new User('doi', 'female');
$user3 = new User('cat', 'female');
$user4 = new User('toro', 'male');

$users = array($user1, $user2, $user3, $user4);

// userIdプロパティをセットするためのコード
$review1 = new Review($juice->getName(), $user1->getId(), 'カワイイねこちゃんですね！');
$review2 = new Review($curry->getName(), $user1->getId(), 'ベロニャーゴにベロベロされてるとろちゃん');
$review3 = new Review($coffee->getName(), $user2->getId(), '眠そうなおめめがいいです');
$review4 = new Review($pasta->getName(), $user2->getId(), '寝顔が最高です。');
$review5 = new Review($juice->getName(), $user3->getId(), '普通のねこ');
$review6 = new Review($curry->getName(), $user3->getId(), 'とろちゃんWALK');
$review7 = new Review($coffee->getName(), $user4->getId(), 'もふもふしたい');
$review8 = new Review($pasta->getName(), $user4->getId(), 'ソファーになりたい！');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>
