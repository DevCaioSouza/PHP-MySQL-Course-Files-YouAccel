<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
#case-sensitive
define("WELCOME", "Hello my name is John Smith");
echo WELCOME;

echo "<hr />";

#case-insensitive
define("WELCOME2", "Hello my name is John Smith", true);
echo welcome2;

echo "<hr />";

#constants are global
definf("CAR", "VOLVO");

function myCar(){
  echo CAR;
}

myCar();


?>

</body>
</html>