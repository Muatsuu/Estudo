<?php

    interface Controlavel{
        public function ligar();
        public function desligar();
    }
    class Televisao implements Controlavel{
        private $estaLigada = false;

        public function ligar(){
            $this -> estaLigada = true;
            return "A televisão esta ligada.";
        }
        public function desligar(){
            $this -> estaLigada = false;
            return "A televisão esta desligada.";
        }
        public function trocarCanal(int $canal){
            if($this -> estaLigada){
                return "Troca de Canal.";
            }else{
                return "Você precisa ligar a televisão primeiro.";
            }
        }
    }
    class Arcondicionado implements Controlavel{
        private $estaLigado = false;
        private $temperatura;

        public function __construct(int $temperatura){
            $this -> temperatura = $temperatura;
        }

        public function ligar(){
            $this -> estaLigado = true;
            return "O Ar-Condicionado foi ligado e colocado na temperatura: {$this -> temperatura} Graus";
        }
        public function desligar(){
            $this -> estaLigado = false;
            return "O Ar-Condicionado foi desligado!";
        }
    }


    $ar = new Arcondicionado(22);
    echo $ar -> ligar()."<br>";
    echo $ar -> desligar();
    echo "<hr>"; // Separador

    $tv = new Televisao();
    echo $tv->ligar() . "<br>";
    echo $tv->trocarCanal(10) . "<br>";
    echo $tv->desligar() . "<br>";
    echo $tv->trocarCanal(12);

?>