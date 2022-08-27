<?php

use Gilclei\CheckCpf\CheckCPF;
use PHPUnit\Framework\TestCase;

class CpfTest extends TestCase
{
    public function testValidaCpf()
    {
        $cpf = '66105234368';
        $this->assertEquals(CheckCPF::isValid($cpf), true);
    }

    public function testValidaCpfInvalid()
    {
        $cpf = '66105234360';
        $this->assertEquals(CheckCPF::isValid($cpf), false);
    }

    public function testValidaCpfInvalidShort()
    {
        $cpf = '661052';
        $this->assertEquals(CheckCPF::isValid($cpf), false);
    }
}
