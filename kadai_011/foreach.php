<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <p>
         <?php
          $vegitables = [
            '名前' => '玉ねぎ', 
            '値段' => 200, 
            '産地' => '北海道'
          ];

          foreach ($vegitables as $key => $value) {
            echo "{$key}:{$value}<br>";
          }
         ?>
    </p>
  </body>
</html>