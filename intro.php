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
echo "Hello world!! <hr />"; 

#comment
/* 
Multi-line comment
*/

// single-line comment

$x = 10 /*  +5 */ +20;
echo $x;
echo "<hr />";
// PHP NÃO É CASE SENSITIVE
// PORÉM, OS NOMES DAS VARIÁVEIS SÃO

$car = "volvo";

echo "My car is a " . $car . "<hr>";
echo "My car is a " . $Car . "<hr>"; #inválido!!




?>


</body>
</html>