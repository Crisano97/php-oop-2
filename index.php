<?php 
    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Gadget.php";
    include_once __DIR__ . "/classes/User.php";
    include_once __DIR__ . "/classes/RegisteredUser.php";
    include_once __DIR__ . "/classes/Guest.php";




    $food = new Food("bone","solid bone", 10, "dog", "nutritional");
    $toy = new Toy("bone","sqeezing bone", 1.49, "rubber", "bone");
    $gadget = new Gadget("bone","sqeezing bone", 30, "dog house", "plastic", "big");
    $registeredUser = new RegisteredUser("pippo","poppi","disneycard",true,"pippopoppi", "1234321", 20);
    $guest = new Guest("pippo","poppi","disneycard",false,23423424);



    var_dump($food);
    var_dump($toy);
    var_dump($gadget);
    var_dump($registeredUser);
    var_dump($guest);







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
        User(userNumber, isRegistered)
        RegisteredUser(name, surname, username, address, email, dateOfBirth, password)
        GuestUser(guestCode)
        MethodOfPayement(number, date)
     -->
</body>
</html>

