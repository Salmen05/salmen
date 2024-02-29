<?php

declare(strict_types=1);
class contaBanco
{
  private int $numConta;
  protected string $tipo;
  private string $dono;
  private float $saldo;
  private bool $status;
  private bool $contaNova;
  public function getNumConta(): int // numConta Get and Set 
  {
    return $this->numConta;
  }
  public function setNumConta(int $numConta)
  {
    $this->numConta = $numConta;
  }
  public function getTipo(): string // tipo Get and Set
  {
    return $this->tipo;
  }
  public function setTipo(string $tipo)
  {
    $this->tipo = $tipo;
  }
  public function getDono(): string // dono Get and Set
  {
    return $this->dono;
  }
  public function setDono(string $dono)
  {
    $this->dono = $dono;
  }
  public function getSaldo(): float // saldo Get and Set
  {
    return $this->saldo;
  }
  public function setSaldo(float $saldo)
  {
    $this->saldo = $saldo;
  }
  public function getStatus(): bool // status Get and Set
  {
    return $this->status;
  }
  public function setStatus(bool $status)
  {
    $this->status = $status;
  }
  public function getContaNova(): bool //contaNova Get and Set
  {
    return $this->contaNova;
  }
  public function setContaNova(bool $contaNova)
  {
    $this->contaNova = $contaNova;
  }
  public function abrirConta()
  {
    if ($this->status) {
      echo 'Sua conta já está aberta';
    } else {
      $this->status = true;
      if ($this->contaNova && $this->tipo == 'CC') {
        $this->saldo = 50;
        $this->contaNova = false;
      } else if ($this->contaNova && $this->tipo == 'CP') {
        $this->saldo = 150;
        $this->contaNova = false;
      }
    }
  }
  public function fecharConta()
  {
    if ($this->status) {
      if ($this->saldo > 0) {
        echo $this->numConta . ', sua conta ainda possui R$' . $this->saldo . '. Primerio, saque todo seu dinheiro.';
      } else if ($this->saldo < 0) {
        echo $this->numConta . ', sua conta está com um débito de '.$this->saldo.'.';
      } else {
        $this->status = false;
      }
    } else {
      echo 'Sua conta já está fechada.';
    }
  }
  public function depositar(float $depositar)
  {
    if ($this->status = true) {
      $this->saldo += $depositar;
    } else {
      echo 'Sua conta está fechada no momento.';
    }
  }
  public function sacar(float $sacar)
  {
    if ($this->status) {
      if ($sacar <= $this->saldo) {
        $this->saldo -= $sacar;
      } else {
        echo $this->numConta . ', não é possível sacar mais do que você possui. Digite uma quantia menor ou igual a R$' . $this->saldo . '.';
      }
    } else {
      echo 'Sua conta está fechada no momento.';
    }
  }
  public function pagarMensal()
  {
    if ($this->status) {
      if ($this->tipo == 'CC') {
        if ($this->saldo >= 12) {
          $this->saldo -= 12;
        } else {
          echo 'Saldo insuficiente.';
        }
      } else if ($this->tipo == 'CP') {
        if ($this->saldo >= 20) {
          $this->saldo -= 20;
        } else {
          echo 'Saldo insuficiente';
        }
      }
    } else {
      echo 'Sua conta está fechada no momento.';
    }
  }
  public function __construct(int $numConta, string $tipo, string $dono)
  {
    $this->numConta = $numConta;
    $this->tipo = $tipo;
    $this->dono = $dono;
    $this->saldo = 0;
    $this->status = false;
    $this->contaNova = true;
  }
}
