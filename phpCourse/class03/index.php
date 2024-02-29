<?php

declare(strict_types=1);
require_once './classes/pen.php';
$pen1 = new Pen();
$pen1->model = 'BIC Crystal';
$pen1->color = 'Blue';
$pen2 = new Pen();
$pen2->model = 'BIC Crystal';
$pen2->color = 'Black';
echo '<pre>';
var_dump($pen1, $pen2);
echo '</pre>';
