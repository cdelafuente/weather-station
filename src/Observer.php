<?php

namespace WeatherStation;

interface Observer
{

  public function update(Weather $weather);

}