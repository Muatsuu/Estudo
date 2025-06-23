<?php

    interface Controller{
        public function turnOn();
        public function turnOff();
    }
    class Televisao implements Controller{
        private $isOn = false;
        public function turnOn(){
            $this -> isOn = true;
            return "A Televisão esta ligada!<br>";
        }
        public function turnOff(){
            $this -> isOn = false;
            return "A Televisão esta desligada.<br>";  
        }
        public function changeChannel(){
            if($this -> isOn == true){
                return "Você mudou de canal.<br>";
            }else{
                return "A televisão precisa estar ligada pra mudar de canal.<br>";
            }
        }
    }
    class ArCondicionado implements Controller{
        private $temp;
        private $isOn = false;
        public function __construct(int $temp){
            $this -> temp = $temp;
        }
        public function changeTemp($temp){
            $oldTemp = $this -> temp;
            $this -> temp = $temp;
            return "Você mudou a temperatura atual de: $oldTemp ° para: {$this -> temp}°";
        }
        public function turnOn(){
            $this -> isOn = true;
            return "Você ligou o Ar-Condicionado e colocou ele na temperatura: {$this -> temp}°<br>";
        }
        public function turnOff(){
            $this -> isOn = false;
            return "Ar-Condicionado desligado.";
        }
    }

    function turnAllOff($aparelhos){
        echo "<hr>Iniciando o desligamento de todos os Aparelhos Conectados.<hr>";
        foreach ($aparelhos as $aparelho) {
            if ($aparelho instanceof Controller) {
                echo $aparelho->turnOff() . "<br>";
            }
        }
        echo "<hr>Todos os aparelhos foram desligados.<hr>";
    }


    echo "<hr>";
    $televisao = new Televisao();
    echo $televisao -> turnOn();
    echo $televisao -> changeChannel();
    echo "<hr>";
    $ar = new ArCondicionado(24);
    echo $ar -> turnOn();
    echo $ar -> changeTemp(22);
    echo "<hr>";
    $itens = [$televisao, $ar];
    turnAllOff($itens);

?>