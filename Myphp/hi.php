<?php
class Car
{
    public $owner ;
    public $year ;
    public $type ;
    public $color ;

    public function __construct ( $owner , $year , $type , $color )
   {
    
        $this->owner = $owner ;
        $this->year = $year ;
        $this->type = $type ;
        $this->color = $color ;
    }
    public function printCar()
    {
        echo $this->owner ." ". $this->year ." ". $this->type ." ". $this-> color . '<br>';
    }
}
$bmw = new Car(owner: 'BMW',year: 2010, type: 'SUV',color: 'Red' ) ;

// $bmw->owner = 'SIAT';

$bmw->printCar();



