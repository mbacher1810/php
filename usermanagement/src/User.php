<?php
namespace Mbacher\Usermanagement\User;

$michael = new Person();
echo $michael   ->setFirstname('Michael')
    ->setSurname('Bacher')
    ->setUsername('mbacher')
    ->Hello();
