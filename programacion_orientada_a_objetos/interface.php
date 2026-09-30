<?php 

    interface SendInterface {
        public function send(string $message): void;
    }

    interface saveInterface {
        public function save(): void;
    }

    class Document implements SendInterface, saveInterface {

        public function send(string $message): void {
            echo "Se envia la venta: " . $message . "\n";
        }

        public function save(): void {
            echo "Se guarda la venta en la nube \n";
        }
    }

    class BeerRepository implements saveInterface {
        public function save(): void {
            echo "Se guarda la venta en la base de datos \n";
        }
    }

    class SaveProcess {
        private saveInterface $saveManager;

        public function __construct(saveInterface $saveManager) {
            $this->saveManager = $saveManager;
        }

        public function keep(): void {
            echo "Hacemos algo antes <br>";
            $this->saveManager->save();
        }

    }

    $beerRepository = new BeerRepository();
    $document = new Document();

    $saveProcess = new SaveProcess($beerRepository);
    $saveProcess = new SaveProcess($document);
    $saveProcess->keep();

    // de esta forma permitimos escalar y reutilizar código, ya que podemos crear nuevas clases que implementen la interfaz saveInterface y pasarlas al constructor de SaveProcess sin necesidad de modificar la clase SaveProcess.

?>