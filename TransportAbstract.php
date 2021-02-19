<?php

 namespace App;


 abstract class TransportAbstract implements FeatureInterface
 {
     /**
      * @var string
      */
     public $brand;

     /**
      * @var string
      */
     public $power;

     /**
      * @var string
      */
     public $color;

     /**
      * @var string
      */
     public $fuel;

     /**
      * @var string
      */
     public $price;

     /**
      * TransportAbstract constructor.
      * @param string $brand
      * @param $power
      * @param $color
      * @param $fuel
      * @param $price
      */
     public function __construct(string $brand, $power, $color, $fuel, $price)
     {
         $this->brand = $brand;
         $this->power = $power;
         $this->color = $color;
         $this->fuel = $fuel;
         $this->price = $price;
     }

     function __destruct()
     {
         echo "Об'єкт знищений!<br>";
     }

     /**
      * the price of the car
      * @return string
      */
     public function getPrice() : string
     {
         return $this->price;
     }

     /**
      * get brand auto
      * @return string
      */
     public function getBrand() : string
     {
         return $this->brand;
     }

     /** get engine power in the auto
      * @return string
      */
     public function getPower() : string
     {
         return $this->power;
     }

     /** get color in the auto
      * @return string
      */
     public function getColor() : string
     {
         return $this->color;
     }

     /** get type of fuel in the car
      * @return string
      */
     public function getTypeFuel() : string
     {
         return $this->fuel;
     }

 }

 