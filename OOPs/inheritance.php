
<?php

    class employee{
        public $name="basu";
        private $salary=15000;
        private $grade=3;

        function showName(){
            echo "The name of this employee is $this->name<br>";
        }

        function setSalary($salary){
            $this->salary=$salary;
        }
        function getSalary(){
            echo "The salary of $this->name is $this->salary<br>"; 
        }
    }

    class programmer extends employee{
        private $language="php";

        function changeLanguage($lang){
            $this->language=$lang;
        }
    }

    $ram = new employee();
    $ram->name="ram";
    $ram->showName();
    $ram->setSalary(10000);
    $ram->getSalary();

    $sita = new programmer();
    $sita->name="sita";
    $sita->showName();
    $sita->setSalary(50000);
    $sita->getSalary();


?>