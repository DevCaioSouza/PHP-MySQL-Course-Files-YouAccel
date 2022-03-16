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

#CONTAR PALAVRAS
echo str_word_count("Hello world!");
echo "<hr>";

#REVERTER PALAVRAS
echo strrev("Hello world"); // retorna dlrow olleH
echo "<hr>";

#PROCURA TEXTO DENTRO DA STRING
echo strpos("Hello world!", "Hello"); // retorna 0
echo "<br>";
echo strpos("Hello world!", "world"); // retorna 6
echo "<hr>";

#SUBSTITUI TEXTO DENTRO DA STRING
echo str_replace("world", "John", "Hello world!"); // retorna Hello John
echo "<hr>";


?>

</body>
</html>