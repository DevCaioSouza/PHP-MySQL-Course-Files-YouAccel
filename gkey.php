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

$x = 30;
$y = 20; 

function test1(){
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}



test1();
echo $y;

#pgp stores global variables in an array called $GLOBALS[index]

?>
  
</body>
</html>