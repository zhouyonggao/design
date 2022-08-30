<?php

namespace app\service\principle;

interface EatAnimal {
    public function eat();
}

interface FlyAnimal {
    public function fly();
}

interface SwimAnimal {
    public function swim();
}

class Dog implements EatAnimal,SwimAnimal
{

    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function swim()
    {
        // TODO: Implement swim() method.
    }
}

class Swan implements EatAnimal,SwimAnimal,FlyAnimal
{
    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function swim()
    {
        // TODO: Implement swim() method.
    }

    public function fly()
    {
        // TODO: Implement fly() method.
    }
}