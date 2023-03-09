<?php
namespace Mbacher\Waehrungsumwandler\Interfaces;

interface IConverter
{
    public function convertCurrency($value, $currency);
}