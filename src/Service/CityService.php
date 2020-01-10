<?php

namespace Weatherproject\Service;


use Weatherproject\Entity\CityModel;

class CityService
{
    public function __construct()
    {
    }

    public function getAll():array {

    }

    public function save(CityModel $city):void {
        if(count( $_SESSION["cities"]) === 0){
            $_SESSION["cities"] = array();
        } else {
            array_push($_SESSION["cities"], $city->getCity());
        }

        var_dump($_SESSION);
    }

}