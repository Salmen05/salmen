<?php

declare(strict_types=1);
class Lutador
{
  private string $nome;
  private string $nacionalidade;
  private int $idade;
  private float $altura;
  private float $peso;
  private string $categoria;
  private int $vitoria;
  private int $empate;
  private int $derrota;
  public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitoria, int $empate, int $derrota)
  {
    $this->setNome($nome);
    $this->setNacionalidade($nacionalidade);
    $this->setIdade($idade);
    $this->setAltura($altura);
    $this->setPeso($peso);
    $this->setVitoria($vitoria);
    $this->setEmpate($empate);
    $this->setDerrota($derrota);
    $this->setCategoria();
  }
  public function apresentar()
  {
    echo('Aí vem o <b>' . ($this->getNome()) . '</b>, ');
    echo('o mano vindo do(a) ' . ($this->getNacionalidade()) .' ');
    echo('que tem  ' . ($this->getAltura()) . ' de altura ');
    echo('e que está na categoria ' . ($this->getCategoria()) . ' pesando ' . ($this->getPeso()) . 'Kg!!');
    echo('<br>Atualmente com ' . ($this->getIdade()) . ' anos, ');
    echo('ele possui <b>' . ($this->getVitoria()) . ' vitória(s)</b>, <b>');
    echo(($this->getEmpate()) . ' empate(s)</b> e <b>');
    echo(($this->getDerrota()) . ' derrota(s)</b>.');
    echo('<br><b><span style="color: red; font-size: 20px;">Uma máquina!</span></b>');
  }
  public function status()
  {
    echo('<br>');
    echo('<br>Lutador: ' . ($this->getNome()));
    echo('<br>Idade: ' . ($this->getIdade()));
    echo('<br>Altura: ' . ($this->getAltura()));
    echo('<br>Peso: ' . ($this->getPeso()));
    echo('<br>Vitórias: ' . ($this->getVitoria()));
    echo('<br>Empates: ' . ($this->getEmpate()));
    echo('<br>Derrotas: ' . ($this->getDerrota()));
  }
  public function ganharLuta()
  {
    $this->setVitoria($this->getVitoria() + 1);
  }
  public function empatarLuta()
  {
    $this->setEmpate($this->getEmpate() + 1);
  }
  public function perderLuta()
  {
    $this->setDerrota($this->getDerrota() + 1);
  }
  public function getNome(): string //nome Getter/Setter
  {
    return $this->nome;
  }
  public function setNome(string $nome)
  {
    $this->nome = $nome;
  }
  public function getNacionalidade(): string //nacionalidade Getter/Setter
  {
    return $this->nacionalidade;
  }
  public function setNacionalidade(string $nacionalidade)
  {
    $this->nacionalidade = $nacionalidade;
  }
  public function getIdade(): int //idade Getter/Setter
  {
    return $this->idade;
  }
  public function setIdade(int $idade)
  {
    $this->idade = $idade;
  }
  public function getAltura(): float //altura Getter/Setter
  {
    return $this->altura;
  }
  public function setAltura(float $altura)
  {
    $this->altura = $altura;
  }
  public function getPeso(): float //peso Getter/Setter
  {
    return $this->peso;
  }
  public function setPeso(float $peso)
  {
    $this->peso = $peso;
    $this->setCategoria();
  }
  public function getCategoria(): string //categoria Getter/Setter
  {
    return $this->categoria;
  }
  private function setCategoria()
  {
    switch ($this->peso) {
      case ($this->peso < 52.20 || $this->peso > 120.20):
        $this->categoria = 'Inválido';
        break;
      case ($this->peso < 70.30):
        $this->categoria = 'Leve';
        break;
      case ($this->peso < 83.90):
        $this->categoria = 'Médio';
        break;
      case ($this->peso < 120.20):
        $this->categoria = 'Pesado';
        break;
    }
  }
  public function getVitoria(): int //vitoria Getter/Setter
  {
    return $this->vitoria;
  }
  public function setVitoria(int $vitoria)
  {
    $this->vitoria = $vitoria;
  }
  public function getEmpate(): int //empate Getter/Setter
  {
    return $this->empate;
  }
  public function setEmpate(int $empate)
  {
    $this->empate = $empate;
  }
  public function getDerrota(): int //derrota Getter/Setter
  {
    return $this->derrota;
  }
  public function setDerrota(int $derrota)
  {
    $this->derrota = $derrota;
  }
}
