<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    $product = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

    foreach  ($product as $key => $value){
      echo "{$key} : {$value} <br>";
    }
    ?>
  </p>
  
</body>
</html>