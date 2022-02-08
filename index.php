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
      settype($dices, "int");
      settype($types, "int");
      $result = Array();
      $i = 0;
      do {
        $result[] = rand(1, $types);
        
        $i++;
      } while ($i < $dices);

      // $result = 0;
      // for($i=0; $i<$dices; $i++) {
      //   echo $result+$i+1 . "\n";
      // };
    };
  ?>

  <body>
    <form action="" method="post">
      <input type="number" name="dices" min="1" max="10" placeholder="1 - 10">
      <input type="number" name="types" min="2" max="10" placeholder="2 - 10">
      <input type="submit" value="Submit">
    </form>

    <span class="result"><?php if($result) print_r($result); ?></span>
  </body>

</html>