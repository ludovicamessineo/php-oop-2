<?php
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toy.php";

$pet_food = new Food("1", "3,99", "5", "Cane", "Crocchette");
var_dump($pet_food)

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
    <ul>
        <li> <?php echo $pet_food->printInfo()?></li>
    </ul>
</body>
</html>