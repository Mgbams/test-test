<?php

namespace Weatherproject\Controller;

use Weatherproject\Form\CityForm;
use Weatherproject\Service\ApiOpenWeather;
use Weatherproject\Service\WeatherActuel;

class HomeController
{
    public function __construct()
    {
        session_start();
    }

    public function showByCity()
    {
        $api = new ApiOpenWeather();
        $verify = new CityForm();
        if($verify->verifyCity($_POST["city"]) === true){
            $defaultData = $api->getWeatherByCity($_POST["city"]);
            include("./../templates/homeByCity.html");
        } else {
           // $this->show();
            echo "hahahahahahahahahahahahahahahahahhahahaah mauvaise ville";
        }

    }

    public function show()
    {
        $weather = new WeatherActuel();
        $defaultData = $weather->getWeather();
        include("./../templates/home.html");
    }

}
