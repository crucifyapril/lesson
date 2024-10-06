<?php

class OOP
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge(): bool
    {
        if ($this->age >= 18) {
            return true;
        } else {
            return false;
        }
    }
}

$name = new OOP;
$name->name = 'user1';
$name->age = 30;
$name->salary = 1000;

$name2 = new OOP;
$name2->name = 'user2';
$name2->age = 31;
$name2->salary = 2000;

$totalSalary = $name2->getSalary() + $name->getSalary();
echo $totalSalary . PHP_EOL;