<?php

class User {
    protected $name;
    protected $age;
    
    public function setName($newName) {
        $this->name = $newName;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($newAge) {
        $this->age = $newAge;
    }

    public function getAge() {
        return $this->age;
    }
}

class Worker extends User {
    private $salary;

    public function setSalary($newSalary) {
        $this->salary = $newSalary;
    }

    public function getSalary() {
        return $this->salary;
    }
}

$firstWorker = new Worker;
$secondWorker = new Worker;

$firstWorker->setName('Иван');
$firstWorker->setAge(25);
$firstWorker->setSalary(1000);

$secondWorker->setName('Вася');
$secondWorker->setAge(26);
$secondWorker->setSalary(2000);

echo $firstWorker->getSalary() + $secondWorker->getSalary();


class Student extends User {
    private $grant; //scholarship не подходит для описания стипендии в нашем привычном понимании :), из моих поисков я понял, что наилучшим будет или grant или student allowance 
    private $educationYear;

    public function setGrant($newGrant) {
        $this->grant = $newGrant;
    }

    public function getGrant() {
        return $this->grant;
    }

    public function setYear($newYear) {
        $this->educationYear = $newYear;
    }

    public function getYear() {
        return $this->educationYear;
    }
}
?>