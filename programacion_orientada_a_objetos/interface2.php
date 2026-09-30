<?php

    interface GetInfo{
        public function getInfo(): string;
    }

    class Address implements GetInfo {

        protected string $address;

        public function __construct(string $address) {
            $this->address=$address;
        }

        #[Override]
        public function getInfo(): string {
            return $this->address;
        }

    }

    class WebSite implements GetInfo{
        protected string $url;

        public function __construct(string $url)
        {
            $this->url=$url;
        }

        #[Override]
        public function getInfo(): string
        {
            return file_get_contents($this->url);
        }

    }

    function PrintInfo(GetInfo $site){
        echo $site->getInfo();
    }   

    // gracias al polimorfismo podemos reemplazar el comportamiento de PrintInfo gracias a la abstracción de las interfaces y dependiendo de a quien llama el método hace una cosa u otra
    // le damos mayor flexibilidad al código para tener mayor mantenimiento y más limpio
    $addres = new Address("Calle 123");
    $webInfo = new WebSite("https://hdeleon.net");
    PrintInfo($addres);
    PrintInfo($webInfo);


?>