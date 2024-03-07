<?php
require_once("../config/connection.php");
$conn = connection();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CPF</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = $conn->prepare("SELECT idcliente, cpf FROM tbcliente");
    $conn->beginTransaction();
    $select->execute();
    $conn->commit();
    foreach ($select as $table) {
    ?>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>