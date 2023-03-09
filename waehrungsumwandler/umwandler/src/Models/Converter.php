<?php
namespace Mbacher\Umwandler\Models;

use Mbacher\Umwandler\Interfaces\IConverter;

class Converter implements IConverter
{
    public function convertCurrency($value, $currency):float
    {
        echo "EUR " . $value . "<br/>";
        $rate = 0.95;
        echo $currency . " ";
        return $value * $rate;
    }
}