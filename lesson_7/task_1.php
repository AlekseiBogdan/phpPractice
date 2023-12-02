<?php

class Student {
    private $name;
    private $age;
    private $group;

    public function setName($newName) {
        $this->$name = $newName;
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

    public function setGroup($newGroup) {
        $this->group = $newGroup;
    }

    public function getGroup() {
        return $this->group.'<br/>';
    }
}


$firstStudent = new Student;

$secondStudent = new Student;

$firstStudent->setName('Иван');
$firstStudent->setAge(21);
$firstStudent->setGroup('U1001');


$secondStudent->setName('Вася');
$secondStudent->setAge(20);
$secondStudent->setGroup('U1002');

echo $firstStudent->getGroup();
echo $secondStudent->getGroup();
echo $firstStudent->getAge() + $secondStudent->getAge();
?>