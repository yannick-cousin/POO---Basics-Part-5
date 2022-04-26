<?php

require_once 'Vehicle.php';

class StakeBoard extends Vehicle
{
  public function __construct(string $color)
  {
    parent::__construct($color, 0, 4);
  }


}