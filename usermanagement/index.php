<?php
require 'vendor/autoload.php';

$user = new \Mbacher\Usermanagement\User();
$user   -> setFirstname('Hans')
        -> setSurname('Maier')
        -> setUsername('hmaier');

$neu = $user->get();

$vorname = $user->getFirstname();
$nachname = $user->getSurname();

echo $user->getName();