<?php
    // Sirven para solventar la herencia multiple y son muy usados en laravel, ya que nos permite reutilizar código en diferentes clases sin necesidad de heredar de una clase padre.
    trait EmailSender {
        public function sendEmail(): void {
            echo "Se envía el email<br>";
        }
    }

    trait DB {
        public function save(){
            echo "Se guarda en base de datos";
        }
    }

    trait Log {
        public function log (string $message, $fileName): void{
            if(!file_exists($fileName)){
                file_put_contents($fileName, "");
            }

            $current = file_get_contents($fileName);
            $current .= date("Y-m-d H:i:s"). " - ".$message."\n";   // .= sirve para concatenar al final 
            file_put_contents($fileName, $current);
        }
    }

    class Invoice {
        use EmailSender, DB, Log;

        public function create(){
            echo "Se crea la factura <br>";
            $this->log("Se creo la factura", "log.txt");
        }

    }

    $invoice = new Invoice();
    $invoice->sendEmail();
    $invoice->save();
    $invoice->create();


?>