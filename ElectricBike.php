<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class ElectricBike extends Vehicle implements LightableInterface
{
  private bool $light = false;

  public function switchOn(): bool
  {
    $this->light = true;
    return $this->light;
  }

  public function switchOff(): bool
  {
    $this->light = false;
    return $this->light;
  }
}