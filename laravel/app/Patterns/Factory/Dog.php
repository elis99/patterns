<?php

namespace App\Patterns\Factory;

class Dog extends AnimalFactory
{
    public function makeSound()
    {
        echo 'BARK!!';
    }
}
