<?php

class Main
{
    public function handleFile($file)
    {
        // save $file to database
        return 'Added to Database';
    }
}

class Sub extends Main
{
    public function handleFile($file)
    {
        if (!is_object($file)) {
            die('Error');
        }

        // save $file to database
    }
}

class Other extends Sub
{
    public function handleFile($file)
    {
        return parent::handleFile($file);
    }
}

$other = new Other();

echo $other->handleFile('hello');
