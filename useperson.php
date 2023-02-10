<?php
require 'Person.php';

use Bacher\Person;

$person1 = new person('Susanne');
$person2 = new person('Frons');

$person1->greet($person2);
$person2->greet($person1);
