<?php

    class Cow extends Animal
    {
        function __construct($id, $name)
        {
            parent::__construct($id, $name);
            $this->productName="Milk";
        }

        function MakeProduct()
        {
            $count=rand(8,11);
            $this->SetProductCount($count);
        }
    }