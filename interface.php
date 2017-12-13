<?php

// Think of an interface as a contract. Lays down the terms for what any implementation must adhere to 
// interface Animal {
//   public function communicate();
// }

// // PHP will force you to add methods in interface
// class Dog implements Animal {
//   public function communicate()
//   {
//     return 'bark';
//   }
// }

// class Cat implements Animal {
//   public function communicate()
//   {
//     return 'meow';
//   }
// }


// If there are ever classes or tasks where you can imagine having multiple implementations you probably need an interface.
interface Logger {
  public function execute($message);
}

class LogToFile implements Logger {
  public function execute($message)
  {
    var_dump('log the message to a file:' . $message);
  }
}

class LogToDatabase implements Logger {
  public function execute($message)
  {
    var_dump('log the message to a database: ' . $message);
  }
}

// Program to an interface, not an implementaion. 
// Notice construct is accepting an interface as an argument as opposed to hard coding in the specific instance of the method you want to use. 

class UsersController {
  protected $logger;
  public function __construct(Logger $logger)
  {
    $this->logger = $logger;
  }

  public function show()
  {
    $user = 'John Doe';

    $this->logger->execute($user);
  }
}

$controller = new UsersController(new LogToDatabase);
$controller->show();
