<?php

use PhpParser\Node\Stmt\Echo_;

    abstract class Animais{
        abstract function fazerSom();
    }


    class Cachorro extends Animais{
        function fazerSom(){
            echo "auauauuaua";
        }
        
        function comportamento(){
            echo "agitado";
        }

        function cor(){
            echo"Preto";
        }
    }

    class Gato extends Animais{
        function fazerSom(){
            echo "miau";
        }

        function comportamento(){
            echo "calmo";
        }


        function cor(){
            echo "Branco";
        }
    }

    class Alien {
        function fazerSom(){
            echo  "arggghhh";
        }

        function comportamento(){
            echo "neutro";
        }

        function cor(){
            echo "marrom";
        }
    }

    class Veterinario{
        function cuidar($animal){
            echo "O animal fez  o som: ", $animal->fazerSom();
            echo "O animal é: ", $animal->comportamento();
            echo "O animal tem a cor : ", $animal->cor();
        }
    }
    
    //$criatura = new Gato();
    //if($criatura instanceof Animais){
      //  echo "É uma animal";

   // }else{
        //echo "Não é animal";
    //}

     $veterinario  =  new Veterinario();
     $veterinario->cuidar(new Gato());


?>