<?php

    abstract class Animal{
        protected $nome;
        protected $cor;

        public function __construct(string $nome, string $cor){
            $this -> nome = $nome;
            $this -> cor = $cor;
        }

        abstract public function fazerSom() : void;

        public function getName() : string{
            return $this -> nome;
        }
    }
    class Cachorro extends Animal{
        public function fazerSom(): void{
            echo $this -> nome ." Late: Au Au<br>";
        }
    }
    class Gato extends Animal{
        public function fazerSom(): void{
            echo $this -> nome ." Mia: Miau!<br>";
        }
    }
    $cachorro = new Cachorro("Thor", "Branco");
    $gato = new Gato("Zara", "Preto");
    
    $cachorro -> fazerSom();
    $gato -> fazerSom();

?>