<?php
use Mbacher\Usermanagement\User;
require 'vendor/autoload.php';

$michael = new Person();
echo $michael   ->setFirstname('Michael')
    ->setSurname('Bacher')
    ->setUsername('mbacher')
    ->Hello();
