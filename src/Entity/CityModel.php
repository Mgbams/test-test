<?php

namespace Weatherproject\Entity;

class CityModel
{
    private $city;

    public function __construct()
    {
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }


}