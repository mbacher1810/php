<?php

use Mbacher\Passwd\Password;

require 'vendor/autoload.php';

$pass = new Password();
$pass->addRandomNumber();
echo $pass->getValue();
