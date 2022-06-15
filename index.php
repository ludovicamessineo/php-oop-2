<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";

$pet_food = new Food("1", "3,99", 5, "Cane", "Crocchette");
// var_dump($pet_food);

$pet_treat = new Food ("4", "4,29", 8, "Cane", "Biscotti");

$pet_rope = new Toy ("7", "8,99", 11, "Corda verde e blu", "(senza suono)");

$pet_toy = new Toy ("7", "11,99", 15, "Corda ad anello", "(con suono)")



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prodotti</h1>
    <h3>Cibo</h3>
    <ul>
        <li> <?php echo $pet_food->printInfo(); ?> </li>
        <li> <?php echo $pet_treat->printInfo(); ?> </li>
    </ul>

    <h3>Giochi</h3>
    <ul>
        <li> <?php echo $pet_rope->printInfo(); ?> </li>
        <li> <?php echo $pet_toy->printInfo(); ?> </li>

    </ul>
</body>
</html>