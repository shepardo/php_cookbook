<?php
/*
7.16 Using Method Polymorphism
Problem
You want to execute different code depending on the number and type of arguments
passed to a method.
*/

// UPDATE: the book states PHP does not support Polymorphism, but it does
// see next example with class Shop
class Shap  
{  
  function draw(){}  
}  
class Circle extends Shap  
{  
  function draw()  
  {  
    print "Circle has been drawn.\n";  
  }  
}  
class Triangle extends Shap  
{  
  function draw()  
  {  
    print "Triangle has been drawn.\n";  
  }  
}  
class Ellipse extends Shap  
{  
  function draw()  
  {  
    print "Ellipse has been drawn.\n";  
  }  
}  
   
$Val=array(2);  
  
$Val[0]=new Circle();  
$Val[1]=new Triangle();  
$Val[2]=new Ellipse();

for($i=0;$i<3;$i++)  
{  
  $Val[$i]->draw();  
} 


/// And how the original examples from the book...

// combine() adds numbers, concatenates strings, merges arrays,
// and ANDs bitwise and boolean arguments
function combine($a, $b) {
  if (is_int($a) && is_int($b)) {
    return $a + $b;
  }
  if (is_float($a) && is_float($b)) {
    return $a + $b;
  }
  if (is_string($a) && is_string($b)) {
    return "$a$b";
  }
  if (is_array($a) && is_array($b)) {
    return array_merge($a, $b);
  }
  if (is_bool($a) && is_bool($b)) {
    return $a & $b;
  }
  return false;
}

print(combine(1, 2) . "\n");
print(combine(1.2, 2.5) . "\n");
print_r(combine(array(1, 2, 3), array(4, 5, 6)));
print(combine(true, false). "\n");

class Image {
  protected $handle;
  function ImageCreate($image) {
    if (is_string($image)) {
      // simple file type guessing
      // grab file suffix
      $info = pathinfo($image);
      $extension = strtolower($info['extension']);
      switch ($extension) {
        case 'jpg':
        case 'jpeg':
          $this->handle = ImageCreateFromJPEG($image);
          break;
        case 'png':
          $this->handle = ImageCreateFromPNG($image);
          break;
        default:
          die('Images must be JPEGs or PNGs.');
      }
    } elseif (is_resource($image)) {
      $this->handle = $image;
    } else {
      die('Variables must be strings or resources.');
    }
  }
  function getHandle() { return $this->handle; }
}

$image = new Image();
$file = "/Users/fernando.gonzalez/Documents/src/php/php-cookbook/ch7-classes/board.png";
//$file = "./board.jpeg";
$image->ImageCreate($file);
print_r($image->getHandle()."\n");

?>