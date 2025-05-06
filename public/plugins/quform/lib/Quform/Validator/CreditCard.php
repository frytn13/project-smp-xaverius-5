<?php

class Quform_Validator_CreditCard extends Quform_Validator_Abstract
{
    public function isValid($value, ?array $context = null)
    {
        $value = preg_replace('/\D/', '', $value);

        if (strlen($value) < 13 || strlen($value) > 19) {
            return false;
        }

        // Algoritma Luhn
        $sum = 0;
        $alternate = false;
        for ($i = strlen($value) - 1; $i >= 0; $i--) {
            $n = (int) $value[$i];

            if ($alternate) {
                $n *= 2;
                if ($n > 9) {
                    $n -= 9;
                }
            }

            $sum += $n;
            $alternate = !$alternate;
        }

        return ($sum % 10 === 0);
    }
}
