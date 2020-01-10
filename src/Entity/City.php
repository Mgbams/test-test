<?php

class CityModel
{
    private $city;

    public function __construct()
    {
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function getCity():string
    {
        return $this->city;
    }
}

