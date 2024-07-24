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
    $user_information = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];
    foreach ($user_information as $key => $value) {
      echo "{$key}:{$value} <br>";
    }
    ?>
    </p>
  
</body>
</html>