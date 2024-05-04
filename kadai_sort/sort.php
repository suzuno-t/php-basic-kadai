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
    // 配列に値を代入する
    $num = [15, 4, 18, 23, 10];
    // 昇順
    sort($num);

    // 昇順結果を出力
    echo '昇順にソートします。<br> ';
    foreach ($num as $value) {
        echo $value . '<br>';
    }

    // 降順
    rsort($num);

    // 降順結果を出力
    echo '降順にソートします。<br> ';
    foreach ($num as $value) {
        echo $value . ' <br>';
    }
    ?>
  </P>
</body>
</html>