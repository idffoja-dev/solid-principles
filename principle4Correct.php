<?php

interface Mover
{
    public function move();
}

interface Attacker
{
    public function attack($target);
}

interface Vulnerable
{
    public function takeDamage($damage);
}

class Character implements Mover, Attacker, Vulnerable
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

class TrainingDummy implements Vulnerable
{
    public $name;
    public $health;

    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }

    public function takeDamage($damage)
    {
        $this->health -= $damage;
        echo "$this->name has $this->health health remaining.<br>";
    }
}

class Turret implements Attacker
{
    public $name;
    public $damage;

    public function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function attack($target)
    {
        echo "$this->name attacked $target->name for $this->damage damage.<br>";
        $target->takeDamage($this->damage);
    }
}

$character = new Character('Ian', 5, 200);
$trainingDummy = new TrainingDummy('Training Dummy', 100);
$turret = new Turret('Turret', 20);

$turret->attack($character);
$character->move();
$character->attack($trainingDummy);
