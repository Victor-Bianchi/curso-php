<?php

require_once('./vendor/autoload.php');
use App\Cliente;
use Core\System;

$cliente = new Cliente('Abigail', 31, true);
$cliente->getInfo();
System::validade($cliente);

$cliente_2 = new Cliente('Luís', 35, false);
$cliente_2->getInfo();
System::validade($cliente_2);