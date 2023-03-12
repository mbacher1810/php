<?php
require 'vendor/autoload.php';

use Mbacher\Umwandler\Models\Converter;

$currency = "USD";
$rate = 0.94;
$value = 120;

$converter = new Converter();

echo $converter->convertCurrency($value, $currency, $rate);