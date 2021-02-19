<?php

use App\TransportAbstract;


class SportCar extends TransportAbstract
{
    /**
     * @var string
     */
    protected $time;

    /**
     * SportCar constructor.
     * @param string $brand
     * @param $power
     * @param $color
     * @param $fuel
     * @param $price
     * @param $time
     */
    public function __construct(string $brand, $power, $color, $fuel, $price, $time)
    {
        parent::__construct($brand, $power, $color, $fuel, $price);
        $this->time = $time;
    }

    function __destruct()
    {
        echo "Об'єкт знищений!<br>";
    }

    /**
     * get car acceleration from 0 to 100
     * @return string
     */
    public function getTime() : string
    {
        return $this->time;
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
