<?php

namespace Bacher;

class person
{
    private string $name = 'Max';

    /**
     * @param string $name Der Name einer Person.
     */

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * This method returns the firstname of the person.
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Greet a person
     *
     * @param person $person
     * @return void
     */
    public function greet(person $person): void
    {
        echo "Hallo $person->name!<br/>";
    }

    /**
     * Let the person walk
     * @return void
     */
    public function gehen(): void
    {
        echo "Ich gehe ...";
    }


}