<?php
require 'vendor/autoload.php';

use Mbacher\Waehrungsumwandler\Models\Converter;

$currency = "USD";
$value = 120;

$converter = new Converter();

echo $converter->convertCurrency($value, $currency);