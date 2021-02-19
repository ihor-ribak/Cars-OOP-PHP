<?php

use App\TransportAbstract;


class Bus extends TransportAbstract
{
    /**
     * @var string
     */
    protected $passengers;

    /**
     * Bus constructor.
     * @param string $brand
     * @param $power
     * @param $color
     * @param $fuel
     * @param $price
     * @param $passengers
     */
    public function __construct(string $brand, $power, $color, $fuel, $price, $passengers)
    {
        parent::__construct($brand, $power, $color, $fuel, $price);
        $this->passengers = $passengers;
    }

    function __destruct()
    {
        echo "Об'єкт знищений!<br>";
    }

    /**
     * get the maximum number of passengers in the car
     * @return string
     */
    public function getPassengers() : string
    {
        return $this->passengers;
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

