<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 06.11.15
 * Time: 20:48
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ . '/../config/autoload.php';

use Layer\Calculate;


$calc = new Calculate();

$test = $calc->eq_roots(2, 6, 1);
$rect = $calc->rectangle(10, 20);
$round = $calc->round(5);


$trap = $calc->trapezoid(2, 2, 6);

print_r($trap);