<?php

require_once "vendor/autoload.php";

use Gilclei\CheckCpf\CheckCPF;

$cpf = '66105234368';

if (CheckCPF::isValid($cpf)) {
    echo 'ok';
}
