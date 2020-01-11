<?php

namespace App\Patterns\Factory;

class Cow extends AnimalFactory
{
    public function makeSound()
    {
        echo 'MOOO!!';
    }
}
