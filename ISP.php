<?php

// Interface segregation principle
// Принцип разделения интерфейса
// Классы не должны зависеть от методов которые они не используют
// Много малкизх интерфейсов всегда лучше чем один суперинтерфейс

interface CarTransformerInterface
{
    public function carTransform();
}

interface ShipTransformerInterface
{
    public function shipTransform();
}

interface PlaneTransformerInterface
{
    public function planeTransform();
}

class CarTransformer implements CarTransformerInterface
{
    public function carTransform()
    {
    }
}

class ShipTransformer implements ShipTransformerInterface
{
    public function shipTransform()
    {
    }
}

class PlaneTransformer implements PlaneTransformerInterface
{
    public function planeTransform()
    {
    }
}

class SuperTransformer implements CarTransformerInterface, ShipTransformerInterface, PlaneTransformerInterface
{
    public function carTransform()
    {
    }

    public function shipTransform()
    {
    }

    public function planeTransform()
    {
    }
}
