<?php
// If Statement
$age = 20;
// if ($age >= 18) {
//     echo 'You are old enough to vote!';
// } else {
//     echo 'Sorry, you are too young to vote.';
// }
$t = date('H');

// if ($t < 12) {
//     echo 'Have a good morning!';
// } else if ($t < 17) {
//     echo 'Have a good day!';
// } else {
//   echo 'Have a good night!';
// }

$posts = [
  [
    'title' => 'Post One',
    'body' => 'This is post one.'
  ],
  [
    'title' => 'Post Two',
    'body' => 'This is post two.'
  ]
];

// echo !empty($posts[0]) ? $posts[0]['title'] : 'No title';

// $first_post = !empty($posts[0]) ? $posts[0]['title'] : 'No title';
$first_post = $posts[0]['title'] ?? null;
// echo $first_post;
$favColor = 'orange';

switch($favColor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is neither red, blue, nor green!';
}
?>