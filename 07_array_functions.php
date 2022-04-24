<?php
$fruits = ['apple', 'banana', 'orange'];

// Get length
// echo count($fruits);

// Search array
// var_dump(in_array('banana', $fruits));

// Add to array
// $fruits[] = 'grape';
array_push($fruits, 'blueberry');
array_unshift($fruits, 'strawberry');

// Remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// Split into 2 chunks
$chunks = array_chunk($fruits, 1);

// Concate 2 arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
// print_r($arr3);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);
// print_r($fruits);
// print_r($chunks);

$a = ['red', 'green', 'yellow'];
$b = ['apple', 'avocado', 'banana'];
$c = array_combine($a, $b);

$keys = array_keys($c);
$values = array_values($c);

$flipped = array_flip($c);

// print_r($keys);
// print_r($values);
// print_r($flipped);

// print_r($c);

$numbers = range(1, 20);
// print_r($numbers)

$newNumbers = array_map(fn($number) => 
"Number: $number", $numbers);

$numbersAboveTen = array_filter($numbers, fn($number) => $number > 10);
// print_r($numbersAboveTen);

$sumOfNumbers = array_reduce($numbers, fn($carry, $item) => $carry + $item);
var_dump($sumOfNumbers);

// print_r($newNumbers);
?>