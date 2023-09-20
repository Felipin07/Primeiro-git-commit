<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>treino</title>
</head>
<body>
  <?php

     // $x = 345;
      //print "<h1> Olá Mundo </h1>";
     // print "Seja Bem vindo";


     // $cars = array("Volvo","Bmw","Toyota");

use PhpParser\Node\Stmt\Echo_;
use PhpParser\Node\Stmt\Return_;

     class Car {
      public $color;
      public $model;
    
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
    
      public function message() {
        return "Meu carro " . $this->color . " da "  . $this->model . "!";
      }
    }
    
    $myCar = new Car("Preto", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("Vermelho", "Toyota");
    echo $myCar->message();

    
    //echo(min(100,80,50,10));
    //echo(max(100,90,80,30,10));

     //$x = 3450;                                 
      // var_dump(is_float($x));          False
     //$x = null;
    //var_dump($x)

    //echo strlen("Teste");
   //echo str_word_count("teste teste ");

     
   //
   
   
      $t = 20;
  
      if($t == 20){
        echo "Exato";
      }


  ?>
</body>
</html>