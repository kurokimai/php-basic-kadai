<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編 kadai_011</title>
</head>
<body>
  <p>
    <?php
    $product_name = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
    foreach ($product_name as $key => $value) {
      echo "{$key}:{$value} <br>";
    }
    ?>
    </p>
  
</body>
</html>