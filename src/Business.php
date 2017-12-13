<?php

namespace Acme;

use Acme\Users\Person;

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