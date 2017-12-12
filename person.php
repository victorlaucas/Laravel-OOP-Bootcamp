<?php  

class Person {
  private $name;
  private $age;
  
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getAge()
  {
    return $this->age * 365;
  }

  public function setAge($age)
  {
    if ($age < 18) {
      throw new Execption("Person is not old enough");
    }
    $this->age = $age;
  }
}

$john = new Person('John Doe');

$john->age(30);// You'll get an error because the variable is set to private

var_dump($john->age; 

// Private methods means method can only be accessed within its class. 

// Protected methods can be extended to subclasses. So a child class has the ability to access protected classes.  