<?php

namespace Weatherproject\Service;


class WeatherActuel
{
    public function __construct()
    {
    }

    public function getWeather()
    {
        $query = file_get_contents('http://ip-api.com/json/?fields=city&lang=fr'); //connection au serveur de ip-api.com et recuperation des données
        $queryCity = json_decode($query, true);
        $queryCity = implode(' ', $queryCity);
        $defaultSearch = str_replace(' ', "%20", $queryCity); //Remplacement des espaces par %20 s'il existe des espaces
        $defaultData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$defaultSearch&units=metric&lang=fr&appid=d16d7dcb95c567985adc924667a7e2cf");
        $defaultData = json_decode($defaultData, true);
        return $defaultData;
    }

}
