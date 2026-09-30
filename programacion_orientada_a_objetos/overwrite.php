<?php
    
    class Discount {

        protected $discount = 0;

        public function __construct(float $discount) {
            $this->discount = $discount;
        }

        // tenemos el siguiente método en la clase padre Discount
        public function getDiscount(float $price): float {
            echo "Se aplica descuento: <br>";
            return $price * $this->discount;
        }

    }

    class SpecialDiscount extends Discount{

        const SPECIAL_DISCOUNT = 2; 

        // módificamos el método de la clase padre Discount 

        #[Override]
        public function getDiscount(float $price): float
        {
            echo "Se aplica descuento especial: <br>";
            return $price * $this->discount * self::SPECIAL_DISCOUNT;
        }


    }

    $discount = new SpecialDiscount(0.1);
    $discountAmount = $discount->getDiscount(100);
    echo $discountAmount;

?>