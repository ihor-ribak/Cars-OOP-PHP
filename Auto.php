<?php

use App\TransportAbstract;

/**
 * class auto
 */
  class Auto extends TransportAbstract
{
      /**
       * @var string
       */
      protected $size;

      /**
       * Auto constructor.
       * @param string $brand
       * @param $power
       * @param $color
       * @param $fuel
       * @param $size
       * @param $price
       */
     public function __construct(string $brand, $power, $color, $fuel, $price, $size)
      {
          parent::__construct($brand, $power, $color, $fuel, $price);
          $this->size = $size;
      }

      function __destruct()
      {
          echo "Об'єкт знищений!<br>";
      }

      /**
       * get diameter of car wheels
       * @return string
       */
      public function getSize() : string
      {
          return $this->size;
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
      public function getBrand(): string
      {
          return $this->brand;
      }

      /**
       * get engine power in the auto
       * @return string
       */
      public function getPower(): string
      {
          return $this->power;
      }

      /**
       * get color in the auto
       * @return string
       */
      public function getColor(): string
      {
          return $this->color;
      }

      /**
       * get type of fuel in the car
       * @return string
       */
      public function getTypeFuel(): string
      {
          return $this->fuel;
      }

  }

