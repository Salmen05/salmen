<?php

declare(strict_types=1);
class Pen
{
  public string $model;
  public string $color;
  private float $tip;
  protected float $inkCharge;
  protected $isClosed;
  public function draw()
  {
    if ($this->isClosed) {
      echo "I'm closed!";
    } else {
      echo 'Drawing...';
    }
  }
  public function close()
  {
    $this->isClosed = true;
  }
  public function open()
  {
    $this->isClosed = false;
  }
}
