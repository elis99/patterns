<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consts\AnimalTypes;
use App\Patterns\Factory\AnimalFactory;
use App\Patterns\Factory\Cat;
use App\Patterns\Factory\Dog;
use App\Patterns\Factory\Cow;

class FactoryController extends Controller
{
    public function index(Request $request)
    {
        $animalType = AnimalTypes::getConstNameByValue($request->animal_id);

        if($animalType == "CAT"){
            $this->makeAction(new Cat());
        }else if($animalType == "DOG"){
            $this->makeAction(new Dog());
        }else{
            $this->makeAction(new Cow());
        }
    }

    private function makeAction(AnimalFactory $animal){
        $animal->action();
    }
}
