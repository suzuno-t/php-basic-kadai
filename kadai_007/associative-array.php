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
    // 連想配列に値を代入する
    $vege_data = ['name'=> 'onion', 'price'=> 200, 'weight'=> 160];
    // 連想配列の中身を出力する
    print_r($vege_data);
    echo '<br>';
    ?>
  </P>
  
</body>
</html>