<?php

class Company{
    public $name;
    public $location;
    public $totEmployees;

    static public $avg_wage = 1500;

    static public $company= 0;
    static public $employees= 0;



    public function __construct($name, $location, $totEmployees) {
        $this->name = $name;
        $this->location = $location;
        $this->totEmployees = $totEmployees;

        self::$company++;
        self::$employees+=$this->totEmployees;

        
    }

    public function getCompanies() {
        if($this->totEmployees !=0){
            echo "L'ufficio " . $this->name . " con sede a " . $this->location . " ha " . $this->totEmployees . " dipedenti \n";
        }else{
            echo "L'ufficio " . $this->name . " con sede a " . $this->location . " non ha " .  " dipedenti \n";
    }
}
    public function avgWage() {
       echo "Lo stipendio medio annuale per l'azienda " . $this->name . " ammonta a " . self::$avg_wage*$this->totEmployees*12 . "€ \n";
    }

    public static function total() {
        echo "I totali delle aziende è ". self::$company. ", il totale dei dipendenti è " . self::$employees . ", il totale dello stipendi di tutte le aziende è " . self::$avg_wage*self::$employees*12 . "€";
    }

}


$company1 = new Company("Aulab", "Bari", 50);
$company1->getCompanies();
$company1->avgWage();
$company2 = new Company("Acquario Pulizie", "Reggio Emilia",20);
$company2->getCompanies();
$company2->avgWage();
$company3 = new Company("Ferrari", "Modena", 150);
$company3->getCompanies();
$company3->avgWage();
$company4 = new Company("Stone Island", "Ravarino", 80);
$company4->getCompanies();
$company4->avgWage();
$company5 = new Company("Barilla", "Parma", 100);
$company5->getCompanies();
$company5->avgWage();
Company::total();





















?>
