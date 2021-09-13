<?php

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
    public function doneUsingPaper(PaperShredderInterface $paperShredder)
    {
        $paperShredder->shred();
    }
}
