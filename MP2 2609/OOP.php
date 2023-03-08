<?php
//this is the parent class
class NameOfClass
{
    private $person;
    private $personAge;

    public function setPerson($person)
    {
        $this->person = $person;
    }
    public function setPersonAge($personAge)
    {
        $this->personAge = $personAge;
    }
    public function getPerson()
    {
        return $this->person;
    }
    public function getPersonAge()
    {
        return $this->personAge;
    }
    public function displayInfo()
    {
        echo $this->getPerson()." is ".$this->getPersonAge()."<br>";
    }
}
//this is the child class
class NameOfChild extends NameOfClass
{
    
    public function __construct(private $pet)
    {
    }
    public function getPet()
    {
        return $this->pet;
    }
    public function printInfo()
    {
        
        echo $this->getPerson()."'s pet is ".$this->getPet()."<br>";
    }
    //overriden displayInfo
    public function displayInfo()
    {
        echo $this->getPet()." is very playful <br>";
    }
    //overloaded printInfo
    public function printInfo2($food)
    {
        
        echo $this->getPet()." likes ". $food."<br>";
    }
}
//this is multilevel inheritance
class PetHobby extends NameofChild
{
    private $hobby;
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }
    public function getHobby()
    {
        return $this->hobby;
    }
}
//this is hierarchical inheritance
class PersonHobby extends NameofClass
{
    private $personHobby;
    public function setPersonoHobby($personHobby)
    {
        $this->personHobby = $personHobby;
    }
    public function getPersonHobby()
    {
        return $this->personHobby;
    }
}



$class1 = new NameOfClass();
$class1->setPerson("Ezequiel");
$class1->setPersonAge(21);
$class1->displayInfo();

$child = new NameofChild("Sano");
$child->setPerson("Ezequiel");
$child ->printInfo();
$child ->displayInfo();
$child ->printInfo2("tuna");
//object 1
$object1 = new NameofClass();
$object1->setPerson("Trizia");
$object1->setPersonAge(22);
$object1->displayInfo();
//object 2
$object2 = new NameofChild("Piggy");
$object2->setPerson("Trizia");
$object2->printInfo();
$object2 ->displayInfo();
$object2 ->printInfo2("apples");
//object 3
$object3 = new NameofClass();
$object3->setPerson("Lecter");
$object3->setPersonAge(21);
$object3->displayInfo();


?>