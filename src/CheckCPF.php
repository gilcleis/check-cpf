<?php

namespace Gilclei\CheckCpf;

/**
 * Validar CPF
 *
 *
 * @category Validation
 * @package  check-cpf
 * @author   Gilclei Araujo <gilclei@gmail.com>
 * @license https://opensource.org/licenses/MIT MIT Licence
 * @link     https://github.com/gilclei/check-cpf
 */
class CheckCPF
{
    /**
     * Valida um nomero de CPF
     *
     * @param string                 $cpf                 numero do cpf do usuario
     *
     * @return bool
     */
    public static function isValid(string $cpf): bool
    {
        //A partir do PHP 7.4, as chaves { } utilizadas para acessar o elemento da string
        //foram descontinuadas, assim este codigo irá resultar em um parse error. A solução
        //é trocar as chaves para colchetes { } => [ ]

        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        if (
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'
        ) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}
