<?php

    // transformando un objeto a json

    $beer = new Beer("heineken", "heineken", 8.5, true);

    $jsonBeer = json_encode($beer);

    echo $jsonBeer."<br>";

    // transformando un json a objeto (se convierte en un stdclass)

    $stringJsonBeer = '{"name":"heineken","brand":"heineken","alcohol":8.5,"isStrong":true}';

    $objetoBeer = json_decode($stringJsonBeer);

    print_r($objetoBeer);

    // transformando un array a json
    $array = [
        "name"=> "Manuel",
        "country"=> "España"
    ];

    $jsonDeArray = json_encode($array);

    echo "<br>".$jsonDeArray."<br>";
    
    // transformando el json de array a array 

    $newArray = json_decode($jsonDeArray, true); // el true sirve para que entienda que es un array asociativo.

    echo $newArray["country"];

    class Beer {
        
        public string $name;
        public string $brand;
        public float $alcohol;
        public bool $isStrong;

        public function __construct(string $name, string $brand, 
            float $alcohol, bool $isStrong){

            $this->name=$name;
            $this->brand=$brand;
            $this->alcohol=$alcohol;
            $this->isStrong=$isStrong;

        }

    }

?>