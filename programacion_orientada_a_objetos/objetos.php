<?php

    declare(strict_types=1); // Habilita el modo estricto para forzar la verificación de tipos en tiempo de ejecución

    $sale = new Sale(100, "2023-06-01");
    $sale = new Sale(100, "2023-06-01");
    $sale = new Sale(10.05, "2023-06-01");

    $onlineSale = new onlineSale(200, "2023-06-01", "Tarjeta de debito");

    //echo Sale::$count."\n"; // 3
    //Sale::resetCount();
    //echo Sale::$count."\n"; // 0

    //echo gettype($sale->total); // double por razones historicas en caso de un float no siemplemente un float 
    //echo $sale->createInvoice(); // Se crea la factura

    //$sale->addConcept(new Concept("Producto A", 50));
    //print_r($sale->concepts); // Array ( [0] => Concept Object ( [description] => Producto A [amount] => 50 ) )

    // el tipo union permite que una propiedad pueda ser de varios tipos, en este caso puede ser un array o null

    //print_r($onlineSale); 
    echo $onlineSale->createInvoice(); // Se crea la factura
    echo $onlineSale->showInfo(); // La venta tiene un monto de 200

    $sale->setDate("asdasdhjakshdjklashdjkashjdk"); // Error: La fecha no puede tener más de 10 caracteres

    class Sale {

        protected float $total;
        private string $date;
        private static $count;
        private array $concepts;

        public function __construct(float $total, string $date) {
            $this->total = $total;
            $this->date = $date;
            self::$count++; // para acceder a la propiedad estática, se utiliza self:: en lugar de $this->
            $this->concepts = [];
        }

        public static function resetCount() {
            self::$count = 0;
        }

        public function addConcept(Concept $concept): void {
            $this->concepts[] = $concept;
        }

        public function __destruct() {
            //echo "Sale object destroyed. Total: {$this->total}, Date: {$this->date}\n";
        }

        public function createInvoice(): string {
            return "Se crea la factura";
        }

        public function getConcepts(): array {
            return $this->concepts;
        }

        public function getTotal(): float {
            return $this->total;
        }

        public function getDate(): string {
            return $this->date;
        }

        public function setConcepts(array $concepts): void {
            $this->concepts = $concepts;
        }

        public function setTotal(float $total): void {
            $this->total = $total;
        }

        public function setDate(string $date): void{
            if(strlen($date)>10 || strlen($date)<10){
                echo "Error: La fecha no puede tener más de 10 caracteres";
            }else{
                $this->date = $date;
            }
        }

    }

    class onlineSale extends Sale {

        public string $paymentMethod;

        public function __construct(float $total, string $date, string $paymentMethod = "Tarjeta de crédito") {
            parent::__construct($total, $date); // Llama al constructor de la clase padre Sale
            $this->paymentMethod = $paymentMethod;
        }

        public function showInfo(): string {
            return "La venta tiene un monto de $this->total";
        }

    }

    class Concept {

        public string $description;
        public float $amount;
        // float|int es un tipo union que permite que la propiedad amount pueda ser de tipo float o int
        public function __construct(string $description, float|int $amount) {
            $this->description = $description;
            $this->amount = $amount;
        }

    }

?>