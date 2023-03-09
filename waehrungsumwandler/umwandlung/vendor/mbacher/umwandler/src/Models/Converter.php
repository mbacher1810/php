<?php
namespace Mbacher\Waehrungsumwandler\Models;

use Mbacher\Waehrungsumwandler\Interfaces\IConverter;

class Converter implements IConverter
{
    public function convertCurrency($value, $currency):float
    {
        $rate = 0.95;
        echo $currency;
        return $value * $rate;
    }
}