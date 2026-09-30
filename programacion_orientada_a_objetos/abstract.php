<?php

    $beer = new Beer(10.0, "Cerveza Artesanal");
    echo $beer->getName() . " - Precio con impuestos: " . $beer->calculatePrice() . "\n";

    abstract class Product {
        protected float $price;
        protected string $name;

        abstract public function calculatePrice(): float;
        
        public function getName(): string{
            return $this->name;
        }

    }

    class Beer extends Product {
        
        const TAX = 1.1;

        public function __construct(float $price, string $name) {
            $this->price = $price;
            $this->name = $name;
        }

        public function calculatePrice(): float {
            return $this->price * self::TAX; 
        }

    }

?>