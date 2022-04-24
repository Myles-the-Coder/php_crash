<?php
  // For Loop

  // for ($i = 0; $i <= 10; $i++) {
  //   echo $i;
  // }

  // While loop
  // $x = 1;

  // while ($x <= 10) {
  //   echo "$x <br>";
  //   $x++;
  // }

  // Do While loop
    // $x = 1;

    // do {
    //   echo "$x <br>";
    //   $x++;
    // } while ($x <= 10);

  // Foreach Loop
  $colors = [
    'red',
    'blue',
    'green'
  ];

  // for($x = 0; $x < count($colors); $x++) {
  //   echo $colors[$x];
  // }

  // foreach($colors as $color) {
  //   echo "$color <br>";
  // }

  // foreach($colors as $index => $color) {
  //   echo "$index: $color <br>";
  // }

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

  foreach($people as $person) {
    echo $person['first_name'] . ' ' . $person['last_name'] . ' is ' . $person['age'] . ' years old. <br>';
  }
?>