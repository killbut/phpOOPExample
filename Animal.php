<?php
    abstract class Animal
    {
        // Field
        private readonly int $id;
        private readonly string $name;
        private int $productCount;

        protected  string $productName;
        // Constructor
        function __construct($id,$name)
        {
            $this->id=$id;
            $this->name=$name;
            $this->productCount=0;
        }
        // Property
        public function GetId()
        {
            return $this->id;
        }
        public function GetName()
        {
            return $this->name;
        }
        public function GetProductName()
        {
            return $this->productName;
        }
        public function GetProductCount()
        {
            return $this->productCount;
        }
        protected function SetProductCount($number)
        {
            $this->productCount+=$number;
        }
        // Method
        abstract function MakeProduct();
    }
?>