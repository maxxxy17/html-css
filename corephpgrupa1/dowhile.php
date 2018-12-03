<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While</title>
  </head>
  <body>
    <?php
  $n = $_GET['n'];

  $sum = 0;
  $i = 0;

  do {
    $sum = $sum + $i;
    $i = $i + 1;
  } while ($i <= $n);

  echo $sum;
     ?>
  </body>
</html>
