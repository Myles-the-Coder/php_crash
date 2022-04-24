<?php
  $x = 10;

  function registerUser($email){
    global $x;

    echo "$email registered";
  }

  function sum($n1 = 5, $n2 = 2) {
    return $n1 + $n2;
  }

  // $result = sum();

  // echo $result;

  $subtract = function($n1, $n2) {
    return $n1 - $n2;
  };

  $multiply = fn($n1, $n2) => $n1 * $n2;

  echo $multiply(5, 2);

  // registerUser('99mylesjefferson@gmail.com');
?>