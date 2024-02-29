<?php

declare(strict_types=1);
require_once './classes/contaBanco.php';
$conta1 = new ContaBanco(123456, 'CC', 'Maria');
$conta2 = new ContaBanco(456789, 'CP', 'Rita');
$conta3 = new ContaBanco(654321, 'CP', 'de');
$conta4 = new ContaBanco(987654, 'CC', 'Cássia');
$conta5 = new contaBanco(001745, 'CC', 'Lima');
$conta1->abrirConta();
$conta2->abrirConta();
$conta1->depositar(300);
$conta2->depositar(500);
$conta1->pagarMensal();
$conta2->pagarMensal();
$conta1->sacar(338);
$conta2->sacar(630);
$conta1->fecharConta();
$conta2->fecharConta();
echo '<pre>';
var_dump($conta1, $conta2);
echo '</pre>';
