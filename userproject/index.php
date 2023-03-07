<?php
require 'vendor/autoload.php';

use Mbacher\Userproject\Models\Generator;

$generator = new Generator();

echo $generator->generatePassword();