<?php 

class Task {
  public $description;
  
  public $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task("Learn OOP");
// $task2 = new Task("Something else");

$task->complete();

var_dump($task->completed);

// var_dump($task->description);
// var_dump($task2->completed);