<?php
require_once('drink.php');
require_once('heart.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('とろちゃんin公園', 450, '/img/toro01.jpg', 'アイスドリンクつき');
$coffee = new Drink('おねむとろちゃん', 660, '/img/toro02.jpg', 'ホットドリンクつき');
$curry = new Heart('DQWとろちゃん', 410, '/img/toro03.jpg', 3);
$pasta = new Heart('スヤスヤとろちゃん', 700, '/img/toro04.jpg', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('cat', 'male');
$user2 = new User('doi', 'female');
$user3 = new User('cat', 'female');
$user4 = new User('toro', 'male');

$users = array($user1, $user2, $user3, $user4);

// userIdプロパティをセットするためのコード
$review1 = new Review($juice->getName(), $user1->getId(), 'カワイイねこちゃんですね！');
$review2 = new Review($curry->getName(), $user1->getId(), 'ベロニャーゴとろちゃん');
$review3 = new Review($coffee->getName(), $user2->getId(), '眠そうなおめめがいいです');
$review4 = new Review($pasta->getName(), $user2->getId(), '寝顔が最高です。');
$review5 = new Review($juice->getName(), $user3->getId(), '普通のねこ');
$review6 = new Review($curry->getName(), $user3->getId(), 'とろちゃんWALK');
$review7 = new Review($coffee->getName(), $user4->getId(), 'もふもふしたい');
$review8 = new Review($pasta->getName(), $user4->getId(), 'ソファーになりたい！');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>
