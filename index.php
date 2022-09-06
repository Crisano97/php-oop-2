<?php 
    include_once __DIR__ . "/classes/Product.php";
    include_once __DIR__ . "/classes/Food.php";
    include_once __DIR__ . "/classes/Toy.php";
    include_once __DIR__ . "/classes/Gadget.php";
    include_once __DIR__ . "/classes/User.php";
    include_once __DIR__ . "/classes/RegisteredUser.php";
    include_once __DIR__ . "/classes/Card.php";


    $registeredUser = new RegisteredUser("pippo","pippo@gmail.com","123asdf");
    $guest = new User();
    $food = new Food("crocchette","molto croccanti", 4.49, "dog", "false", "di tutto e di piú", "12/20/2050");
    $toy = new Toy("osso di gomma", "morbido e resistente", 9.99, "dog", "rubber", "red");
    $registeredUser->addProducts($food);
    $registeredUser->addProducts($toy);
    $guest->addProducts($food);
    $guest->addProducts($toy);
    echo $registeredUser->getCartTotal();
    // echo $guest->getCartTotal();
    var_dump($registeredUser);
    // var_dump($guest);
    $card = new Card(123454321,"09/10/2023", 1000);
    var_dump($card->isCardValid());
    $newCardBalance = $card->getCardBalance() - $registeredUser->getCartTotal();
    echo $newCardBalance;
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

