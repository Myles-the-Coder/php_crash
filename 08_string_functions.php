<?php
  $str = 'hello world';

  // Get length of string
  echo strlen($str);

  // Get start position of substring
  echo strpos($str, 'o');

  // Get end position of substring
  echo strrpos($str, 'o');

// Reverse a string
  echo strrev($str);

  // Lowercase string
  echo strtolower($str);

// Uppercase string
echo strtoupper($str);

// Replace portion of a string specificed by the offset and length
echo substr($str, 0, 5);
echo substr($str, 6);

// Starts with
if (str_starts_with($str, 'hello')) {
  echo 'String starts with hello';
}

// Ends with
if(str_ends_with($str, 'world')) {
  echo 'String ends with world';
}

// Use htmlspecialchars to prevent XSS
$str2 = '<script>alert(1)</script>';
echo htmlspecialchars($str2);

printf('%s %s', 'Hello', 'World');

printf('1+1=%d', 1 + 1);
?>