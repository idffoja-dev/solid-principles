<?php

use PaperShredderInterface as GlobalPaperShredderInterface;

/**
 * 1. What are high level modules? - accepts the abstraction
 * 2. What are low level modules? - implements the abstraction
 * 3. What are abstractions and how to depend on them? - interface
 */

interface PaperShredderInterface
{
    public function shred();
}

class SmallPaperShredder implements PaperShredderInterface
{
    public function shred()
    {
    }
}

class LargePaperShredder implements PaperShredderInterface
{
    public function shred()
    {
    }
}

class Ian
{
    public function doneUsingPaper(PaperShredderInterface $paperShredderInterface)
    {
        $paperShredderInterface->shred();
    }
}
