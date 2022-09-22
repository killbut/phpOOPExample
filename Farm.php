<?php


    class Farm
    {
        private array $farmAnimals;

        function __construct($inputData)
        {
            foreach ($inputData as $key=>$value)
            {
                $this->GenerateAnimals($key,$value);
            }
        }

        private function GenerateAnimals($type,$count)
        {
            $animal=array();
            for($i=0;$i<$count;$i++)
            {
                $animal[$i]=new $type($i,$this->CreateRandomName($type));
            }
            $this->farmAnimals[$type]=$animal;
        }
        private function CreateRandomName($type)
        {
            return $type."_".rand(0,999).rand(0,999).rand(0,999);
        }

        public function ShowAllAnimals()
        {
            echo "Animals:\n";
            foreach ($this->farmAnimals as $key=>$value)
            {
                echo $key."-".count($value)."\n";
            }
        }
        public function ShowInformationAbout($type)
        {
            echo $type."s".":"."\n";
            foreach ($this->farmAnimals[$type] as $value)
            {
                echo "Type"."\t"."Id"."\t"."Name"."\t"."Product"."\t"."Count"."\n";
                echo $type."\t\t".$value->GetId()."\t".$value->GetName()."\t\t".$value->GetProductName()."\t".$value->GetProductCount()."\n";
            }
        }
        public function AddAnimal($type)
        {
            $newId= (end($this->farmAnimals[$type]))->GetId()+1;
            array_push($this->farmAnimals[$type],new $type($newId,$this->CreateRandomName($type)));
        }


        public function CollectProducts()
        {
            foreach ($this->farmAnimals as $animals)
            {
                foreach ($animals as $animal)
                {
                    $animal->MakeProduct();
                }
            }
        }
        public function ShowProductsInfo()
        {
            echo "Product"."\t"."Count"."\n";
            foreach ($this->farmAnimals as $key=>$animals)
            {
                $count=0;
                $productName="";
                foreach ($animals as $animal)
                {
                    $count+=$animal->GetProductCount();
                    $productName=$animal->GetProductName();
                }
                echo $productName."\t".$count."\n";
            }
        }
    }
    ?>