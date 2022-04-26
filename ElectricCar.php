<?php

require_once 'Car.php';
require_once 'RechargeableInterface.php';
require_once 'LightableInterface.php';

final class ElectricCar extends Vehicle implements LightableInterface
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