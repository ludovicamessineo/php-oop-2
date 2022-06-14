<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    public $animal;
    public $type;

    function __construct($ward, $price, $loyalty_points, $animal, $type) {
        parent::__construct($ward, $price, $loyalty_points);
        $this->animal = $_animal;
        $this->type = $_type;
    }

    public function printInfo() {
        return "$this->ward € $this->price $this->loyalty_points $this->animal $this->type";
    }
}

?>