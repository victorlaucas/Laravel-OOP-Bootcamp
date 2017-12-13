<?php

class Person {
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Business {
  protected $staff;

  public function __construct(Staff $staff)
  {
    $this->staff = $staff;
  }

  // Called type hinting when a class is passed in as an argument 
  public function hire(Person $person)
  {
    $this->staff->add($person);
  }

  public function getStaffMembers()
  {
    return $this->staff->members();
  }
}

class Staff {
  protected $members = [];

  public function __construct($members = [])
  {
    $this->members = $members;
  }

  public function add(Person $person)
  {
    $this->members[] = $person;
  }

  public function members()
  {
    return $this->members;
  }
}

$victor = new Person('Victor Laucas');

$staff = new Staff([$victor]);

$coding = new Business($staff);

$coding->hire(new Person('Jane Doe'));

var_dump($coding->getStaffMembers());