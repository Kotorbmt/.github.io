<?php
// date.phpのデータ

$juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

// date.phpのデータ、ここまで


// menu.phpのデータ

class Menu {
  public $name;
  public $price;
  public $image;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getTaxIncludedPrice(){
    return floor($this->price*1.08);
  }
  
}

// menu.phpのデータ、ここまで

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <img src="<?php echo $menu->image ?>" class="menu-item-image">
          <h3 class="menu-item-name"><?php echo $menu->name ?></h3>
          <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
