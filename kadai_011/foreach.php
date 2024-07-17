<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題11</title>
 </head>

 <body>
  <p>
  <?php
  $vegetables_name = ['名前' => '玉ねぎ' , '値段' => '200' , '産地' => '北海道' ];
  foreach ($vegetables_name as $key => $value) {
    echo "{$key}:{$value}<br>";
   }

  ?>

  </p>

</body>

<html>
