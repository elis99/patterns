<?php
namespace App\Consts;

use ReflectionClass;

class AnimalTypes
{
    const CAT = 1;
    const DOG = 2;
    const COW = 3;

    public static function getConstNameByValue(int $value): string
    {
        $reflectionDeliveryClass = new ReflectionClass(__CLASS__);
        $constants = $reflectionDeliveryClass->getConstants();
        $constName = array_search($value, $constants);

        return $constName;
    }
}
?>
