<?php
namespace\Mbacher\Userproject\Models;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

use Mbacher\Userproject\Interface\IPassword;

class Generator implements IPassword{

    public function generatePassword():string
    {
        $generator = new ComputerPasswordGenerator();

        $generator
            ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, true)
            ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, false)
        ;

        return $generator->generatePassword();
    }
}