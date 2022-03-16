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

#crie a classe
class Person{
  // crie propriedades (variáveis atreladas a objetos)
  public $firstname;
  public $lastname;
  public $age;

  #Atribua valores para as variáveis
  public function __construct($firstname, $lastname, $age){
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
  }

  #crie um method ( função ligada a um objeto)
  public function hello(){
    return "I am " . $this->firstname . 
    " " . $this->lastname . 
    ", my age is: ". $this->age . "";
  }

}

#criando uma nova pessoa chamada John Smith, que tem 25 anos
$person1 = new Person('John', 'Smith', 25);
$person2 = new Person('Joe', 'Bob', 25);

#imprimir o que o método hello retorna
echo $person1->hello();
echo "<br>";
echo $person2->hello();
echo "<hr>";

class Car{
  public $carName;
  public $carColor;
  public $carPrice;

  public function __construct($carName, $carColor, $carPrice){
    $this->carName = $carName;
    $this->carColor = $carColor;
    $this->carPrice = $carPrice;
  }

  public function printMsg(){
    return "The car model " . $this->carName . 
    " of color " . $this->carColor . 
    " has the price of " . $this->carPrice . " dollars";
  }

}

$car1 = new Car("Corolla", "Silver", 20000);
$car2 = new Car("Toro", "White", 18000);
echo $car1->printMsg();
echo "<br>";
echo $car2->printMsg();
echo "<hr>";



class Guitar{
  #declarar
  public $guitarModel;
  public $guitarColor;
  public $guitarPrice;

  public function __construct($guitarModel, $guitarColor, $guitarPrice){
    $this->guitarModel = $guitarModel;
    $this->guitarColor = $guitarColor;
    $this->guitarPrice = $guitarPrice;
  }

  public function printGuitar(){
    return "The guitar " . $this->guitarModel . 
    " of color " . $this->guitarColor . 
    " costs " . $this->guitarPrice . " dollars ";
  }

}

$guitar1 = new Guitar("Ibanez", "White", 1200);
$guitar2 = new Guitar("ESP", "Purple", 1800);

echo $guitar1->printGuitar();
echo "<br>";
echo $guitar2->printGuitar();
echo "<hr>";





?>

</body>
</html>