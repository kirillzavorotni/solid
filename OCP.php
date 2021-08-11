<?php

// Open/Close principle
// Принцип открытоси/закрытости
// Классы должены быть открыть для расширения и закрыты для изменения

interface LoggerInterface
{
    public function log($e);
}

class DBLogger implements LoggerInterface
{
    public function log($e)
    {
        $this->saveToDB($e);
    }

    public function saveToDB($e)
    {
        // save to db
    }
}

class FileLogger implements LoggerInterface
{
    public function log($e)
    {
        $this->saveToFile($e);
    }

    public function saveToFile($e)
    {
        // save to file
    }
}


class Product
{
    private $logger;

    public function __construct(LoggerInterface $logger)
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
            $this->logger->log($e);
        }

    }
}