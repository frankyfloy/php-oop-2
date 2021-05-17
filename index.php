<?php

    include __DIR__.('/ShoppingCart.php');
    include __DIR__.('/user.php');
    include __DIR__.('/fattura.php');
    include __DIR__.('/products.php');


    $utente1 = new User('Francesco','Sica','02/03/1991');
    $articolo1 = new Product('JORDAN', 'BRAND TEE - T-shirt con stampa', 'T-shirt',1,'Abbigliamento',20.50);
    $articolo2 = new Product('Gucci', 'T-shirt con stampa', 'T-shirt',2,'Abbigliamento',80);
    $articolo3 = new Product('Prada', 'T-shirt con stampa', 'T-shirt',3,'Abbigliamento',100);
    $carrelloUser_1 = new Carrello();




    $carrelloUser_1->insertProduct($articolo1);
    $carrelloUser_1->insertProduct($articolo2);
    $carrelloUser_1->insertProduct($articolo3);


    var_dump($utente1);
    var_dump($articolo1);
    var_dump($articolo2);
    var_dump($articolo3);
    echo "------------------------------";
    var_dump($carrelloUser_1->getCart());


?>
