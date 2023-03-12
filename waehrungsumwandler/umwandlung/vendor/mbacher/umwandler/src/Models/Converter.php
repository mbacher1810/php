<?php
namespace Mbacher\Umwandler\Models;

use Mbacher\Umwandler\Interfaces\IConverter;

class Converter implements IConverter
{
    public function convertCurrency($value, $currency, $rate):float
    {
        echo $currency;
        return $value * $rate;
    }
}