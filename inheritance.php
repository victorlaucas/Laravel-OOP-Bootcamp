<?php

abstract class Shape {
  protected $color;

  public function __construct($color = 'red')
  {
    $this->color = $color; 
  }

  public function getColor()
  {
    return $this->color;
  }

  // This function is 'abstact' so each time a new instance of shape is instantiated they must create a getarea methdod.
  abstract protected function getArea();
}

class Square extends Shape {
  protected $length = 4;

  public function getArea()
  {
    return pow($this->length, 2);
  }
}

class Circle extends Shape {
  protected $radius = 5;

  public function getArea()
  {
    return M_PI * pow($this->radius, 2);
  }
}

class Triangle extends Shape {
  protected $base = 4;
  
  protected $height = 7;

  public function getArea()
  {
    return .5 * $this->base * $this->height;
  }
}

// $circle = new Circle;
// echo $circle->getArea();
// This code and code above are the same. Lower code is just a faster way of writing it. 
echo (new Circle)->getArea();