<?php
namespace Mbacher\Umwandler\Interfaces;

interface IConverter
{
    public function convertCurrency($value, $currency);
}