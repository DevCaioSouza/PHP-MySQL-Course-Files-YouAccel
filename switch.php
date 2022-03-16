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

$car = "honda";

switch($car){
  case "volvo";
    echo "You drive a Volvo!";
    break;
  case "bmw";
    echo "You drive a BMW!";
    break;
  case "honda";
    echo "You drive a Honda!";
    break;
  default:
    echo "You don't drive";
}

?>

</body>
</html>