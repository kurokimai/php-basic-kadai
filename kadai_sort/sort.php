<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
  $nums = [15, 4, 18, 23, 10];

  function sort_2way($array, $order) {
  // $order が true なら昇順、false なら降順でソートする
  if ($order) {
    echo '昇順で表示します<br>';
    // 昇順ソート
    sort($array);  
  } else {
    echo '降順で表示します<br>';
    // 降順ソート
    rsort($array); 
  }

  // ソート済みの配列を表示する
  foreach ($array as $value) {
    echo $value . "<br>";
  }
}

// 昇順でソート
sort_2way($nums, true);

echo "<br>"; 

// 降順でソート
sort_2way($nums, false);
?>

</p>

  
</body>
</html>