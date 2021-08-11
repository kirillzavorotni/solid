<?php

// Single responsibility principle
// Принцип единственной обязанности
// Каждый объект должен иметь одну обязанность и
// эта обязанность должна быть реализована в классе объекта

class Logger
{
    public function log($e)
    {
        // make logging
    }
}

class Product
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function setPrice($value)
    {
        try {
            // set price
        }
        catch(Exception $e)
        {
            $this->logger->log($e->getMessage());
        }
    }
}