<?php

namespace WeatherStation;

class Weather
{

  /** @var float */
  private $temp;
  /** @var float */
  private $humidity;
  /** @var float */
  private $pressure;

  /**
   * @return float
   */
  public function getTemp()
  {
    return $this->temp;
  }

  /**
   * @return float
   */
  public function getHumidity()
  {
    return $this->humidity;
  }

  /**
   * @return float
   */
  public function getPressure()
  {
    return $this->pressure;
  }

  /**
   * @param float $temp
   * @return Weather
   */
  public function setTemp($temp)
  {
    $this->temp = $temp;
    return $this;
  }

  /**
   * @param float $humidity
   * @return Weather
   */
  public function setHumidity($humidity)
  {
    $this->humidity = $humidity;
    return $this;
  }

  /**
   * @param float $pressure
   * @return Weather
   */
  public function setPressure($pressure)
  {
    $this->pressure = $pressure;
    return $this;
  }

}