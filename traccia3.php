<?php

class Car{
    private $num_telaio;

    public function __construct($_num_telaio){
        $this->num_telaio = $_num_telaio;
    }

    protected function getNumTelaio(){
        return $this->num_telaio;
    }

}
class Fiat extends Car{
    protected $license;
    protected $name;

    public function __construct($_license, $_name, $_num_telaio){
        parent:: __construct($_num_telaio);
        $this->license = $_license;
        $this->name = $_name;
    }

    public function stringa(){
        $num_telaio = $this->getNumTelaio();
        echo "La mia macchina è {$this->name} con targa {$this->license} e con il numero di telaio {$num_telaio}";
    }

}

$myCar = new Fiat("ND 123 OP" , "Opel", "1234" );
$myCar->stringa();

var_dump($myCar);