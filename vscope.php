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

#global scope
$x = 5; 

// function test1(){
//   echo "Value of x is: $x <hr>"
// };
// test1()
echo "Hello?!? <hr>";
// LOCAL SCOPE

function test2(){
  $y = 5; // local scope
  echo "value of y is: $y";
}
test2()


?>

</body>
</html>