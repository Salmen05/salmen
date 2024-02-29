<?php
declare(strict_types=1);
require_once("./classes/Controlador.php");
class ControleRemoto implements Controlador
{
  private int $volume;
  private bool $ligado;
  private bool $tocando;
  public function __construct() // Construct
  {
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocador(false);
  }
  public function ligar()
  {
    if (!$this->ligado) {
      echo '<br>Ligando controle';
      $this->setLigado(true);
    } else {
      echo 'Já está ligado!';
    }
  }
  public function desligar()
  {
    if ($this->ligado) {
      echo '<br>Desligado controle';
    } else {
      echo '<br>Já está desligado!';
    }
  }
  public function abrirMenu();
  private function getVolume(): int //volume Getter and Setter
  {
    return $this->volume;
  }
  private function setVolume(int $volume)
  {
    $this->volume = $volume;
  }
  private function getLigado(): bool //ligado Getter and Setter
  {
    return $this->ligado;
  }
  private function setLigado(bool $ligado)
  {
    $this->ligado = $ligado;
  }
  private function getTocando(): bool //tocando Getter and Setter
  {
    return $this->ligado;
  }
  private function setTocador(bool $tocando)
  {
    $this->tocando = $tocando;
  }
}
