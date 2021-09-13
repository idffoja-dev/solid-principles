<?php

/**
 * 1. Child arguments must match the parents arguments
 * 2. Child return type must match the parents return type
 */

class ParentClass
{
    public function handleFile(string $file): string
    {
        // save $file to database
        return 'Added to Database';
    }
}

class ChildClass extends ParentClass
{
    public function handleFile(string $file): string
    {
        // save $file to database

        return 'Test';
    }
}

class OtherClass extends ChildClass
{
    public function handleFile(string $file): string
    {
        return parent::handleFile($file);
    }
}

$other = new OtherClass();

echo $other->handleFile('hello');
