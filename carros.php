<?php
    class Carro{
        public $model;
        private $actualKM;

        public function __construct($model){
            $this -> model = $model;
            $this -> actualKM = 0;
        }
        private function regMaintenance($type){
            echo "Manutenção do tipo: $type foi registrada.";
        }
        public function addKm($km){
            if ($km > 0){
                $this -> actualKM += $km;
                echo "Foram adicionados $km no KM total do veiculo, totalizando: {$this -> actualKM}";
                if($km > 10000){
                    echo "O veiculo precisa de manutenção geral!";
                }
            }
            else{
                echo "Digite um valor Valido!";
            }
        }
        public function getKm(){
            echo "O total de KM atual é de: {$this -> actualKM}";
        }
    }

    $c1 = new Carro("Corolla");
    echo $c1 -> addKM(2000)."<br>";
    echo $c1 -> getKm()."<br>";
    echo $c1 -> addKM(1000)."<br>";
    
?>