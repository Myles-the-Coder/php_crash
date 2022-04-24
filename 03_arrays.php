<?php
// Simple Array
$numbers = [1,2,3];
$fruits = array('apples', 'oranges', 'bananas');

// echo $fruits[2]

// Associative Array
$colors = array(
    'red' => '#FF0000',
    'blue' => '#0F0',
    'green' => '#00f'
);

// echo $colors['red'];

$person = [
    'first_name' => 'Myles',
    'last_name' => 'Jefferson',
    'age' => 23
];

// echo $person['first_name'];
// Multi-dimensional Array
$people = [
  [
    'first_name' => 'Myles',
    'last_name' => 'Jefferson',
    'age' => 23
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 30
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'age' => 28
  ]
  ];

// echo $people[2]['first_name'];
var_dump(json_encode($people))
?>