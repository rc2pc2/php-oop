<?php
class Person {
    public $name;
    public $age;
    public $discount = 0;
    public $address;
    public static $staticProperty = 'VERSION 1.0';

    function __construct(String $_name, Int $_age, Address $_address){
        $this->name = $_name;
        $this->age = $_age;
        $this->address = $_address;

        if ($_age >= 65){
            $this->discount = 25;
        }
    }

    public function getName(){
        return $this->name;
    }
}

class Address{
    public $street;
    public $city;
    public $state;
    public $zipcode;
    public $country;

    function __construct(
        String $street,
        String $city,
        String $state,
        String $zipcode,
        String $country
    ){
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
    }
}

$newAddress = new Address('via Napoli 12', 'Torino', 'TO', '00223', 'Italy');
$gina = new Person('Gina', 33, $newAddress);
echo $gina->getName();
var_dump($gina);

$johnny = new Person('Johnny', 44, new Address('via Roma 1', 'Napoli', 'NA', '11223', 'Italy'));
echo $johnny->getName();
var_dump($johnny);