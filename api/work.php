<?php

$foo = "bar\n";
$bar = 'bit\n';
$bit = 'baz';

echo $foo;
echo $bar;
echo $bit;

$one = 'ONE';

echo "The value is ($one).\n";
echo "The value is " . $one;

class Animal
{
  public $name = 'Pig';
}

$wilber = new Animal();
echo $wilber->name . "\n";

$myArr = [

  'first' => 'Kourtney',
  'last' => 'Coleman'

];

$people = [

  0 => 'Kourt',
  1 => 'Nicole',
  2 => 'Coleman'

];

var_dump($myArr);
print_r($people);

/*
$n = 0;

if (isset($_GET['id'])) {
  $n = $_GET['id']
}

//this means the same thing
$n = isset($_GET['id']) ? $_GET['id'] : 0;

//this also means the same thing
$n = $_GET['id'] ?? 0;

*/

//same thing in javascript
n = foo || default
