<?php
class Menu {
  public $name;
  // $priceというプロパティを定義してください
  public $price;
  // $imageというプロパティを定義してください
  public $image;

  // コンストラクタの引数に$price, $imageを追加してください
  public function __construct($name) {
    $this->name = $name;
    // priceプロパティに引数の$priceを代入してください

    // imageプロパティに引数の$imageを代入してください

  }

  public function hello() {
    echo '私は'.$this->name.'です';
  }
}
?>
