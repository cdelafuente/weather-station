<?php

namespace WeatherStation;

class WeatherData implements Subject
{

  /** @var Observer[] */
  private $observers;


  public function __construct()
  {
    $this->observers = [];
  }

  public function registerObserver(Observer $observer)
  {
    $this->observers[] = $observer;
  }

  public function removeObserver(Observer $observer)
  {
    if (in_array($observer, $this->observers))
    {
      
    }
  }

  public function notifyObservers()
  {

  }

  public function haveMeasurementsChanged()
  {

  }

  private function getTemperature()
  {

  }

  private function getHumidity()
  {
  }

  private function getPressure()
  {

  }

}