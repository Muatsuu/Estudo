<?php

    class Member{
        public $name;
        protected $baseSalary;

        public function __construct($name, $baseSalary){
            $this -> name = $name;
            $this -> baseSalary = $baseSalary;
        }
        protected function bonusCalculate($percentual){
            $bonus = ($this -> baseSalary / 100) * $percentual;
            $this -> baseSalary += $bonus;
            echo "O funcionario recebeu um bonus de $percentual % e vai receber esse mes o total de: R$ {$this -> baseSalary}";
        }
        public function salaryTotCalc($percentual){
            $this -> bonusCalculate($percentual);
        }
        public function getSalary(){
            echo "Funcionario: {$this -> name}<br>Salario: R$ {$this -> baseSalary}";
        }
    }
    class Manager extends Member{
        public $department;
        public function __construct($name, $baseSalary, $department){
            parent::__construct($name, $baseSalary);
        }
        public function salaryTotCalc($percentual){
            $this -> bonusCalculate($percentual);
        }
    }
    $enzo = new Member("Enzo", 1500);
    //echo $enzo -> getSalary();
    echo "<br>";
    echo $enzo -> salaryTotCalc(20)."<br>";
    $enzoGM = new Manager("Enzo", 3000, "Gerencia");
    echo $enzoGM -> salaryTotCalc(30);
?>