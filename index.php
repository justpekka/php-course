<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNG by Pekka</title>
  </head>

  <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {
      $dices = $_REQUEST['dices'] != null ? $_REQUEST['dices'] : null;
      $types = $_REQUEST['types'] != null ? $_REQUEST['types'] : null;
      $i = 0;
      $result = 0;
      echo gettype($dices);
      
      // do {
      //   echo $result . "\n";
      //   // $result++;
      //   $i == $dices;
      // } while ($i++);

      // for($i; $i<$dices; $i++) {
      //   echo $result . "\n";
      // }
    };
  ?>

  <body>
    <form action="" method="post">
      <input type="number" name="dices">
      <input type="number" name="types">
      <input type="submit" value="Submit">
    </form>

    <span class="result"><?#php if($result) echo $result; ?></span>
  </body>

</html>