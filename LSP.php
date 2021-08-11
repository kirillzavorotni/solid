<?php

// Liskov subsitution principle
// Принцип подстановки Барбары Лисков
// Поведение наследуемых классов не должно противоречить
// поведению заданному базовым классом

class Bird
{
    public function fly()
    {
        return 1;
    }
}

class RunBirdFly
{
    public function runFly(Bird $bird)
    {
        $bird->fly();
    }
}

class Penguin extends Bird
{
    public function fly()
    {
        // return 'I can nat to fly!'; - incorrect, because base class returns number
        return 0; // this is correct
    }
}

class Bird2 extends Bird
{
    public function fly()
    {
        return 1;
    }
}
