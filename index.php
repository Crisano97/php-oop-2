<?php 
    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Gadget.php";

    $product = new Product("food", "food food food", 10);
    $food = new Food("bone","solid bone", 10, "dog", "nutritional");
    $toy = new Toy("bone","sqeezing bone", 10, "rubber", "bone");
    $gadget = new Gadget("bone","sqeezing bone", 30, "dog house", "plastic", "big");



    var_dump($product);
    var_dump($food);
    var_dump($toy);
    var_dump($gadget);




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
    <!-- 
        Product(name, description, price)
        Food(petType, nutritionalValues)
        Toy(material, type)
        Gadget(type, material, petSize)
        User(userNumber, address, email)
        RegisteredUser(name, surname, username, dateOfBirth, password, registered)
        GuestUser(unregistered)
        MethodOfPayement(number, date)
     -->
</body>
</html>

