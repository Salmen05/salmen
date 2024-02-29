<?php

declare(strict_types=1);
class Pen
{
  private string $model;
  private float $tip;
  private string $color;
  private bool $isOpen;
  public function __construct(string $model, float $tip, string $color)
  {
    $this->model = $model;
    $this->tip = $tip;
    $this->color = $color;
    $this->close();
  }
  private function open(){
    $this->isOpen = true;
  }
  private function close(){
    $this->isOpen = false;
  }
  public function getModel(): string
  {
    return $this->model;
  }
  public function setModel(string $m)
  {
    $this->model = $m;
  }
  public function getTip(): float
  {
    return $this->tip;
  }
  public function setTip(float $t)
  {
    $this->tip = $t;
  }
  public function getColor(): string{
    return $this->color;
  }
  public function setColor(string $c){
    $this->color = $c;
  }
  public function getIsOpen(): bool{
    return $this->isOpen;
  }
  public function setIsOpen(bool $isOpen){
    $this->isOpen = $isOpen;
  }
}
