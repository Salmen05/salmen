<?php

declare(strict_types=1);
require_once('./interfaces/Controlador.php');
class ControleRemoto implements Controlador
{
  private int $volume;
  private bool $ligado;
  private bool $tocando;
  public function ligar()
  {
    if (!$this->ligado) {
      $this->setLigado(true);
    }
  }
  public function desligar()
  {
    if ($this->ligado) {
      $this->setLigado(false);
    }
  }
  public function abrirMenu()
  {
    echo ('-----MENU CONTROLE-----<br><br>');
    echo ('Volume atual: ');
    for ($i = 0; $i < $this->getVolume(); $i += 10) {
      echo ('| ');
    }
    echo ('(' . $this->getVolume() . ')');
    echo ('<br>Está ligado? ' . ($this->getLigado() ? 'Sim' : 'Não'));
    echo ('<br>Está tocando? ' . ($this->getTocando() ? 'Sim' : 'Não'));
  }
  public function fecharMenu()
  {
    echo ('<br><br>Fechando menu...');
  }
  public function maisVolume()
  {
    if ($this->getLigado() && $this->getVolume() < 100) {
      $this->setVolume($this->getVolume() + 5);
    }
  }
  public function menosVolume()
  {
    if ($this->getLigado() && $this->getVolume() > 0) {
      $this->setVolume($this->getVolume() - 5);
    }
  }
  public function ligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() > 0) {
      $this->setVolume(0);
    }
  }
  public function desligarMudo()
  {
    if ($this->getLigado() && $this->getVolume() == 0) {
      $this->setVolume(50);
    }
  }
  public function play()
  {
    if ($this->getLigado() && !$this->getTocando()) {
      $this->setTocando(true);
    }
  }
  public function pause()
  {
    if ($this->getLigado() && $this->getTocando()) {
      $this->setTocando(false);
    }
  }
  public function getVolume(): int //volume Getter and Setter
  {
    return $this->volume;
  }
  public function setVolume(int $volume)
  {
    $this->volume = $volume;
  }
  public function getLigado(): bool //ligado Getter and Setter
  {
    return $this->ligado;
  }
  public function setLigado(bool $ligado)
  {
    $this->ligado = $ligado;
  }
  public function getTocando(): bool //tocando Getter and Setter
  {
    return $this->tocando;
  }
  public function setTocando(bool $tocando)
  {
    $this->tocando = $tocando;
  }
  public function __construct()
  {
    $this->setVolume(50);
    $this->setLigado(false);
    $this->setTocando(false);
  }
}
