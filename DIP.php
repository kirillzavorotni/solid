<?php

// Dependency inversion principle
// Принцип инверсии зависимостей
// Зависимости должны строиться относительно абстракций, а не деталей(классов)

interface FoodProviderInterface
{
    public function getFood();
}

class Wife implements FoodProviderInterface
{
    public function getFood()
    {
        // return food
    }
}

class Restaurant implements FoodProviderInterface
{
    public function getFood()
    {
        // return food
    }
}

class Man
{
    private $foodProvider;

    public function __construct(FoodProviderInterface $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function getFood()
    {
        return $this->foodProvider->getFood();
    }
}