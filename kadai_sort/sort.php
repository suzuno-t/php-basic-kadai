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
    // ソートする配列を宣言
    $num = [15, 4, 18, 23, 10];

    // 関数の設定
    function sort_2way($array, $order){
      
      // 昇順・降順の判定
      if ($order) {
        echo '昇順にソートします。'.'<br>';
        sort($array);
      } else {
        echo '降順にソートします。'.'<br>';
        rsort($array);
      }
      foreach ($array as $value) {
        echo $value . '<br>';
      } 
    }

    sort_2way($num,true);
    sort_2way($num,false);
    ?>
  </p>
</body>
</html>