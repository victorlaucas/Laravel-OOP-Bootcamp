<?php 

// First example
// class Math {
//   public static function add(...$nums)
//   {
//     return array_sum($nums);
//   }
// }

// echo Math::add(1,2,3);

// Static allows you to access the method from anywhere. It is a global function


// Jeffrey says this is completely wrong
// If you create a new instance of person(joe) and they haveBirthday then their age will be shared with every instance of person(Jane). This is wrong because each person's age should be unique to them. 
// class Person {
//   public static $age = 1;

//   public function haveBirthday()
//   {
//     static::$age ++;
//   }

//   public function age()
//   {
//     $this->age;
//   }
// }

// $joe = new Person;
// $joe->haveBirthday();

// $jane = new Person;
// $jane->haveBirthday();

// echo Person::$age;



class BankAccount {
  const TAX = .09;
}

echo BankAccount::TAX;