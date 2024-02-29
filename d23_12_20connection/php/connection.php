<?php
global $connection;
try {
  $pdo = new PDO('mysql:host=localhost;dbname=dbcurso', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
  echo "ERROR - " . $erro->getMessage();
}
