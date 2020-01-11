<?php

namespace App\Patterns\Factory;

class Cat extends AnimalFactory
{
    public function makeSound()
    {
        echo 'MEOW!!';
    }
}
