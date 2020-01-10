<?php

namespace Weatherproject\Form;

use Weatherproject\Entity\CityModel;
use Weatherproject\Service\ApiOpenWeather;

class CityForm
{
    public function __construct()
    {

    }

    public function verifyCity($city)
  {
      $test = (int) $city;
      if ($test > 0 ) {
          return false;
      } else {
          return true;
      }
//            if (preg_match("/^[a-zA-Z ]^/", $city)) {
//                return true;
//            } else {
//                return false;
//            }
    }
}