<?php

interface EntityInterface
{
    public function move();
    public function attack($target);
    public function takeDamage($damage);
}

class Character implements EntityInterface
{
    public $name;
    public $damage;
    public $health;

    public function __construct($name, $damage, $health)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->health = $health;
    }

    public function move()
    {
        echo "$this->name moved.<br>";
    }

    public function attack($target)
    {
        echo "$this->name attacked $target->name for $this->damage damage.<br>";
        $target->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        $this->health -= $damage;
        echo "$this->name has $this->health health remaining.<br>";
    }
}

class TrainingDummy implements EntityInterface
{
    public $name;
    public $health;

    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }

    public function move()
    {
    }

    public function attack($target)
    {
    }

    public function takeDamage($damage)
    {
        $this->health -= $damage;
        echo "$this->name has $this->health health remaining.<br>";
    }
}

class Turret implements EntityInterface
{
    public $name;
    public $damage;

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function move()
    {
    }

    public function attack($target)
    {
        echo "$this->name attacked $target->name for $this->damage damage.<br>";
        $target->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
    }
}

$character = new Character('Ian', 3, 100);
$trainingDummy = new TrainingDummy('Training Dummy', 200);
$turret = new Turret('Turret', 5);

$turret->attack($character);
$character->move();
$character->attack($trainingDummy);
