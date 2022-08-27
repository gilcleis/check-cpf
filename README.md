[![Latest Stable Version](http://poser.pugx.org/gilclei/check-cpf/v)](https://packagist.org/packages/gilclei/check-cpf) [![Total Downloads](http://poser.pugx.org/gilclei/check-cpf/downloads)](https://packagist.org/packages/gilclei/check-cpf) [![Latest Unstable Version](http://poser.pugx.org/gilclei/check-cpf/v/unstable)](https://packagist.org/packages/gilclei/check-cpf) [![License](http://poser.pugx.org/gilclei/check-cpf/license)](https://packagist.org/packages/gilclei/check-cpf) [![Size](https://img.shields.io/github/repo-size/gilcleis/check-cpf)]() [![Size](https://img.shields.io/github/stars/gilcleis/check-cpf)]()

Check-CPF
=======
Projeto de uma biblioteca para validar numero do CPF

## Necessário
[![PHP Version Require](http://poser.pugx.org/gilclei/check-cpf/require/php)](https://packagist.org/packages/gilclei/check-cpf)


Instalação
------------

Use o composer para gerenciar suas dependências e baixar check-cpf:

```bash
composer require gilclei/check-cpf
```

Example
-------
```php
<?php

require_once "vendor/autoload.php";

use Gilclei\CheckCpf\CheckCPF;

$cpf = '66105234368';

if (CheckCPF::isValid($cpf)){
    echo 'ok';
}
?>

```
```
php exemple.php
```
```
vendor/bin/phpunit tests/
```
