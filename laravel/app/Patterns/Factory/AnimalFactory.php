<?php

namespace App\Patterns\Factory;

abstract class AnimalFactory
{
    abstract public function makeSound();

    public function action(): void
    {
        $this->makeSound();
    }
}
