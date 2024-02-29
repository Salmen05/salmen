<?php
declare(strict_types=1);
require_once './classes/pen.php';
$pen1 = new Pen('BIC Crystal', 0.7, 'Blue');
$pen2 = new Pen('BIC Crystal', 0.7, 'Black');
$pen2->setIsOpen(true);
echo '<pre>';
var_dump($pen1, $pen2);
echo '</pre>';
echo'Carlos have stored a '.$pen1->getColor().' '. $pen1->getModel().' of '.$pen1->getTip().' tip pen';
echo'Leandro have stored a '.$pen2->getColor().' '. $pen2->getModel().' of '.$pen2->getTip().'tip pen';
