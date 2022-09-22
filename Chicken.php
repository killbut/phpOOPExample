<?php

    class Chicken extends Animal
    {
        function __construct($id, $name)
        {
            parent::__construct($id, $name);
            $this->productName="Egg";
        }

        function MakeProduct()
        {
            $count=rand(0,1);
            $this->SetProductCount($count);
        }
    }
    ?>