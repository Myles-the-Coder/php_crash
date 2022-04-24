<?php
/* Cookies are a mechanism that allows a web server 
to store small bits of data on the user's computer.
*/

// Set cookie
setcookie('user', 'Myles', time() + (86400 * 30));

echo isset($_COOKIE['user']) ? $_COOKIE['user'] : 'Not set';
?>