<?php

class Continent{
    
    public $nameContinent;

    public function __construct ($name) {
    
        $this->nameContinent = $name;
    }
    public function getMyCurrentLocation(){
    
        echo "Mi trovo in ". $this->nameContinent;
    }
}
class Country extends Continent
{
    public $nameCountry;


    public function __construct($continent, $country) {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }

    public function getMyCurrentLocation(){
        parent::getMyCurrentLocation();
        echo ", ". $this->nameCountry;
    }
}
class Region extends Country 
{
    public $nameRegion;

    public function __construct($continent, $country, $region) {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }

    public function getMyCurrentLocation(){
        parent::getMyCurrentLocation();
        echo ", ". $this->nameRegion;
    }
}
class Province extends Region 
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province) {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }

    public function getMyCurrentLocation(){
        parent::getMyCurrentLocation();
        echo ", ". $this->nameRegion;
    }
}
class City extends Province 
{
   public $nameCity; 

   public function __construct($continent, $country, $region, $province, $city) {
    parent::__construct($continent, $country, $region, $province);
    $this->nameCity = $city;
   }

   public function getMyCurrentLocation(){
    parent::getMyCurrentLocation();
    echo ", ". $this->nameCity;
   }
}
class Street extends City 
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street) {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation(){
        parent::getMyCurrentLocation();
        echo ", ". $this->nameStreet;
    }
}

$myLocation = new Street("Europa", "Italia", "Puglia", "BA", "Bari", "StradaSanGiorgioMartire2D");

$myLocation ->getMyCurrentLocation();