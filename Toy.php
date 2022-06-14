<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    public $noise;

    function __construct($ward, $price, $loyalty_points, $noise) {
        parent::__construct($ward, $price, $loyalty_points);
        $this->noise = $_noise;
    }

    public function printInfo() {
        return "$this->ward € $this->price $this->loyalty_points $this->noise";
    }
}
?>