<?php

class Vertebrates {

    protected function getSpecialization() {

       return "Sono un animale Vertebrato\n";
     
    }
    
    public function __construct() {
        echo $this->getSpecialization();
    }
 
}

class Warm_Blooded extends Vertebrates{
    
    protected function getSpecialization() {

        return parent::getSpecialization(). " Sono un animale a sangue caldo\n";
      
    }

    public function __construct() {
        parent:: __construct();
    }

}

class Cold_Blooded extends Vertebrates{
    
    protected function getSpecialization() {

        return parent::getSpecialization()." Sono un animale a sangue freddo\n";
      
    }

    public function __construct() {
        parent:: __construct();
    }

}

class Mammals extends Warm_Blooded {
    
    protected function getSpecialization() {

        return parent::getSpecialization()." Mammals";
      
    }

    public function __construct() {
        parent:: __construct();
    }
 
}

class Birds extends Warm_Blooded {
    
    protected function getSpecialization() {

        return parent::getSpecialization() ." Birds";
      
    }

    public function __construct() {
        parent:: __construct();
    }

}

class Fish extends Cold_Blooded {
    
    protected function getSpecialization() {

        return parent::getSpecialization()." Splash\n";
      
    }

    public function __construct() {
        parent:: __construct();
    }
    

}

class Reptiles extends Cold_Blooded {
    
    protected function getSpecialization() {

        return parent::getSpecialization()." ,Reptiles";
      
    }

    public function __construct() {
        parent:: __construct();
    }

}

class Amphibians extends Cold_Blooded {
    
    protected function getSpecialization() {

        return parent::getSpecialization()." ,Amphibians";
      
    }

    public function __construct() {
        parent:: __construct();
    }

}

$magikarp = new Fish();