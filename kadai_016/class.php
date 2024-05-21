<?php
// 型宣言と異なるデータ型の場合にエラーを発生させる
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    // Foodクラスを定義する
    class Food{
      // プロパティを定義する
      private $name;
      private $price;
      // コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }
      public function show_price(){
        echo $this->price ,'<br>';
      }
    }
    

    // Animalクラスを定義する
    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
      public function show_height(){
        echo $this->height ,'<br>';
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);
    
    // プロパティを出力する
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // 値を出力する
    $food-> show_price();
    $animal-> show_height();
    ?>
  </p>
</body>
</html>