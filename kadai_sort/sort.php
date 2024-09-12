<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
          // この関数内で定義された変数$numsは関数の外から参照できない
          $nums = [15, 4, 18, 23, 10];
  
          if($order) {
              echo '昇順にソートします。<br>';
  
              // このsort関数に与える配列は1つにする。
              sort($nums, $array);
              foreach ($nums as $num) {
                  echo $num . '<br>';
              }
          } else {
              echo '降順にソートします。<br>';
              // このrsort関数に与える配列は1つにする。
              rsort($nums, $array);
              foreach ($nums as $num) {
                  echo $num . '<br>';
              }
          }
      }
  
      // 関数の外から$numは参照することはできない
      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>