<?php
include_once("../../php/config/connection.php");
$conn = connection();
if (isset($_GET['idusuario'])) {
  $update = $conn->prepare("UPDATE tbusuario SET nome = :nome, email = :email, nivel = :nivel");
}