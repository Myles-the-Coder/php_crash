<?php
// File handling is the ability to read an write files on the server.
$file = 'extras/users.txt';

if(file_exists($file)) {
//  echo readfile($file);
$handle = fopen($file, 'r');
$contents = fread($handle, filesize($file));
fclose($handle);
echo $contents;
} else {
$handle = fopen($file, 'w');
$contents = 'Myles'. PHP_EOL . 'Brad' . PHP_EOL . 'John';
fwrite($handle, $contents);
fclose($handle);
echo $contents;
}
?>