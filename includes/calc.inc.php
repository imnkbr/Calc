<?php
declare(strict_types = 1);
include 'class-autoload.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = $_POST['oper'];

$calc = new Calc((int)$num1 , (int)$num2 ,  $oper);

try {
    echo $calc->calculator();

} catch (TypeError $e) {
    echo "Error" . $e->getMessage();
}