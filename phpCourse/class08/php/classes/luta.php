<?php

declare(strict_types=1);
class Lutar
{
  private Lutador $desafiado;
  private Lutador $desafiante;
  private int $round;
  private bool $aprovado;
  public function marcarLuta(Lutador $l1, Lutador $l2)
  {
  } 
  public function lutar()
  {
  }
  public function getDesafiado(): Lutador //desafiado Getter/Setter
  {
    return $this->desafiado;
  }
  public function setDesafiado(Lutador $desafiado)
  {
    $this->desafiado = $desafiado;
  }
  public function getDesafiante(): Lutador //desafiante Getter/Setter
  {
    return $this->desafiante;
  }
  public function setDesafiante(Lutador $desafiante)
  {
    $this->desafiante = $desafiante;
  }
  public function getRound(): int //round Getter/Setter
  {
    return $this->round;
  }
  public function setRound(int $round)
  {
    $this->round = $round;
  }
  public function getAprovado(): bool //aprovada Getter/Setter
  {
    return $this->aprovado;
  }
  public function setAprovado(bool $aprovado)
  {
    $this->aprovado = $aprovado;
  }
}
