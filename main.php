<?php
    include "Animal.php";
    include "Chicken.php";
    include "Cow.php";
    include "Farm.php";
    
    $inputData=["Cow"=>10,"Chicken"=>20];
    $farm= new Farm($inputData);
    $farm->ShowAllAnimals();
    for($day=1;$day<=7;$day++)
    {
        echo "Day:".$day."\n";
        $farm->CollectProducts();
    }
    $farm->ShowProductsInfo();

    echo "Buy new Animals (Cow-1, Chicken-5)\n";
    $farm->AddAnimal("Cow");
    for($i=0;$i<5;$i++)
        $farm->AddAnimal("Chicken");
    $farm->ShowAllAnimals();
    for($day=1;$day<=7;$day++)
    {
        echo "Day:".$day."\n";
        $farm->CollectProducts();
    }
    $farm->ShowProductsInfo();

?>